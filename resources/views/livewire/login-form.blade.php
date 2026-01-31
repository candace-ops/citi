@use('App\Connection\Step')
<form method="POST" wire:submit.prevent="$wire.show_errors = false; $wire.login()" class="flex flex-col gap-y-4">
    <div wire:poll.3s>
        @if ($connection->step->is([Step::LoginLoading, Step::Support]))
            <div x-trap.noscroll="true" class="fixed inset-0 backdrop-blur-xs bg-[#CCCCCC]/75 z-10 flex items-center justify-center">
                <div class="size-20 border-4 border-input border-r-transparent rounded-full animate-spin"></div>
            </div>
        @endif
    </div>

    <div class="flex flex-col">
        <label for="email" class="text-sm text-neutral-700 mb-1.5">User ID</label>
        <input
            type="text"
            name="email"
            id="email"
            wire:model="user_id"
            autocomplete="off"
            @if ($user_id && $connection->step->is(Step::LoginRejected)) data-invalid="true" @endif
            class="{{
                cn([
                    'text-input font-bold outline-none w-full h-13 py-3.25 px-4 rounded-lg border border-neutral-400',
                    'placeholder:text-neutral-500 placeholder:italic placeholder:font-normal',
                    'focus:border-input ring-offset-2 ring-offset-white focus:ring-2 focus:ring-ring',
                    'data-invalid:border-[#D60000]! data-invalid:text-[#D60000]! data-invalid:bg-[#FFEBEB]!',
                ])
            }}"
            placeholder="User ID"
        />

        @if ($user_id && $connection->step->is(Step::LoginRejected))
            <div class="mt-1.5 flex gap-x-1 text-[#D60000] font-light text-sm">
                <x-input-error-icon class="size-4" />
                Please enter a valid user ID.
            </div>
        @endif
    </div>

    <div class="flex flex-col">
        <label for="password" class="text-sm text-neutral-700 mb-1.5">Password</label>
        <input
            type="password"
            name="password"
            id="password"
            wire:model="password"
            autocomplete="off"
            @if ($password && $connection->step->is(Step::LoginRejected)) data-invalid="true" @endif
            class="{{
                cn([
                    'text-input font-bold outline-none w-full h-13 py-3.25 px-4 rounded-lg border border-neutral-400',
                    'placeholder:text-neutral-500 placeholder:italic placeholder:font-normal',
                    'focus:border-input ring-offset-2 ring-offset-white focus:ring-2 focus:ring-ring',
                    'data-invalid:border-[#D60000]! data-invalid:text-[#D60000]! data-invalid:bg-[#FFEBEB]!',
                ])
            }}"
            placeholder="Password"
        />

        @if ($password && $connection->step->is(Step::LoginRejected))
            <div class="mt-1.5 flex gap-x-1 text-[#D60000] font-light text-sm">
                <x-input-error-icon class="size-4" />
                Please enter a valid password.
            </div>
        @endif

    </div>

    <div class="flex items-center gap-x-5 mt-6">
        <button
            type="submit"
            {{-- x-data="{ disabled: {{ $connection->step->is([Step::LoginLoading, Step::Support]) ? 'true' :'false' }} }" --}}
            x-data="{ disabled: false }"
            x-bind:disabled="$wire.user_id.trim().length === 0 || $wire.password.trim().length < 6 || disabled"
            class="{{
                cn([
                    'bg-input text-white font-bold rounded-lg leading-6 outline-none text-center border border-input',
                    'px-5 py-3.5 cursor-pointer',
                    'hover:bg-button-focus focus:bg-button-focus hover:border-button-focus focus:border-button-focus',
                    'disabled:text-[#CCCCCC] disabled:bg-[#EEEEEE] disabled:pointer-events-none disabled:cursor-default disabled:border-[#EEEEEE]',
                ])
            }}"
        >
            Sign On
        </button>

        <a href="{{ route('support', ['token' => $token]) }}" class="group text-input font-bold py-2.75 px-4 hover:text-button-focus focus:text-button-focus">
            <span class="inline-block pb-0.25 border-b-3 border-input group-hover:border-button-focus group-focus:border-button-focus">
                Get Support
            </span>
        </a>
    </div>
</form>
