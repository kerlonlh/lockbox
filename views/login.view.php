<?php $validacoes = flash()->get('validacoes'); ?>

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
        <div class="card">
          <div class="card-body">
            <div class="card-title">Faça seu login</div>

            <?php require base_path('views/partials/_mensagem.view.php'); ?>

            <label class="form-control">
              <div class="label">
                <span class="label-text text-black">Email</span>
              </div>
              <input type="text" name="email" class="input input-bordered w-full max-w-xs bg-white" value="<?= old('email') ?>"/>
              <?php if (isset($validacoes['email'])) { ?>
                <div class="label text-xs text-error"><?= $validacoes['email'][0] ?></div>
              <?php } ?>
            </label>
            <label class="form-control">
              <div class="label">
                <span class="label-text text-black">Senha</span>
              </div>
              <input type="password" name="senha" class="input input-bordered w-full max-w-xs bg-white" value="<?= old('senha') ?>" />
              <?php if (isset($validacoes['senha'])) { ?>
                <div class="label text-xs text-error"><?= $validacoes['senha'][0] ?></div>
              <?php } ?>
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