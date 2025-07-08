<div class="bg-base-300 rounded-l-box w-56">
    <div class="bg-base-200 p-4">
        + Nova nota
    </div>
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