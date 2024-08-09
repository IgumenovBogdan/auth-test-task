<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Services\RegistrationService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function __construct(
        private readonly RegistrationService $registrationService
    ) {
    }

    public function index(): View|Factory|Application
    {
        return view('registration-form');
    }

    public function store(RegistrationRequest $request): RedirectResponse
    {
        $user = $this->registrationService->createUser($request->only('email', 'password', 'name'));

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('dashboard')->with('message', 'You have been successfully registered!');
    }
}
