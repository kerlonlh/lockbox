<div class="grid grid-cols-2">
  <div class="hero min-h-screen flex ml-40">
    <div class="hero-content -mt-20">
      <div>
        <p class="py-2 text-xl">Bem vindo ao</p>
        <h1 class="text-6xl font-bold">LockBox</h1>
        <p class=" pt-2 pb-4 text-xl"> onde você guarda <span class="italic">tudo</span> com segurança.</p>
      </div>
    </div>
  </div>
  <div class="bg-white hero min-h-screen mr-40 text-black">
    <div class="hero-content -mt-20">
      <form action="/login" method="POST">
        <?php $validacoes = flash()->get('validacoes'); ?>
        <div class="card">
          <div class="card-body">
            <div class="card-title">Faça seu login</div>
            <div role="alert" class="alert alert-warning">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
              </svg>
              <span></span>
            </div>
            <label class="form-control">
              <div class="label">
                <span class="label-text text-black">Email</span>
                <input
                  type="text" name="email"
                  class="input input-bordered w-full max-w-xs bg-white"
                  value="<?= old('email') ?>">
              </div>
              <?php if (isset($validacoes['email'])) : ?>
                <div class="label text-xs text-error"><?= $validacoes['email'][0] ?></div>
              <?php endif; ?>
            </label>
            <label class="form-control">
              <div class="label">
                <span class="label-text text-black">Senha</span>
                <input type="password" name="senha"
                  class="input input-bordered w-full max-w-xs bg-white"
                  value="<?= old('senha') ?>">
              </div>
              <?php if (isset($validacoes['senha'])) : ?>
                <div class="label text-xs text-error"><?= $validacoes['senha'][0] ?></div>
              <?php endif; ?>
            </label>
            <div class="card-actions">
              <button class="btn btn-primary btn-block">Login</button>
              <a href="/registrar" class="btn btn-link">Quero me registrar</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>