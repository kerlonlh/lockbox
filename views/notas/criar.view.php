<div class="mx-auto max-w-screen-lg h-screen flex flex-col">

    <div class="navbar bg-base-100 shadow-sm">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl">LockBox</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a>👁️</a></li>
                <li>
                    <details>
                        <summary><?= auth()->nome ?></summary>
                        <ul class="bg-base-100 rounded-t-none p-2">
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex space-x-4 w-full">
        <form action="" class="w-full">
            <label class="input input-bordered flex items-center gap-2 w-full">
                <input type="text" name="pesquisar" class="grow" placeholder="Pesquisar notas no LockBox" />
                <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <g
                        stroke-linejoin="round"
                        stroke-linecap="round"
                        stroke-width="2.5"
                        fill="none"
                        stroke="currentColor">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </g>
                </svg>
            </label>
        </form>
        <a href="/notas/criar" class="btn btn-primary"> + item</a>
    </div>






    <div class="flex flex-grow py-6">
        <div class="bg-base-300 rounded-l-box w-56">

        </div>


        <div class="bg-base-200 rounded-r-box w-full p-10">
            <form action="/notas/criar" method="POST" class=" flex flex-col space-y-6">
                <label for="" class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Título</span>
                    </div>
                    <input type="text" placeholder="type here" class="input input-bordered w-full">
                </label>

                <label for="" class="form-control">
                    <div class="label">
                        <span class="label-text">Sua nota</span>
                    </div>
                    <textarea placeholder="Bio" class="textarea textarea-bordered h-24 w-full"></textarea>
                </label>

                <div class="flex justify-end items-center">
                    <button class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>