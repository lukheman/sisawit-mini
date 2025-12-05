<div class="login-card">
    <div class="text-center mb-4">
        <!-- Ganti dengan logo perusahaan kamu -->
        <div class="logo">
            <!-- <img src="https://via.placeholder.com/80x80/2e7d32/white?text=🌴" alt="Logo Bibit Sawit" class="img-fluid"> -->
        </div>
        <h4 class="fw-semibold text-dark">SISAWIT</h4>
        <p class="text-muted">Sistem Penjualan Bibit Kelapa Sawit</p>
    </div>

    <form wire:submit="submit" method="POST">
        <div class="mb-4">
            <label for="username" class="form-label text-muted fw-medium">Email</label>
            <input type="text" class="form-control" id="username" wire:model="email" required autofocus>
        </div>

        <div class="mb-4">
            <label for="password" class="form-label text-muted fw-medium">Password</label>
            <input type="password" class="form-control" id="password" wire:model="password" required>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-login">Masuk</button>
        </div>
    </form>

    <div class="text-center mt-4">
        <small class="text-muted">© 2025 Bibit Kelapa Sawit Terpercaya</small>
    </div>
</div>
