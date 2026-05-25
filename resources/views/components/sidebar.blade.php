<div class="sidebar no-transition" id="babiSidebar">

    <script>
        if (localStorage.getItem('sidebarState') === 'collapsed') {
            document.getElementById('babiSidebar').classList.add('collapsed');
        }

        // Remove the no-transition class right after the page finishes loading
        window.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                document.getElementById('babiSidebar').classList.remove('no-transition');
            }, 10);
        });
    </script>

    <button onclick="toggleSidebar()" class="toggle-btn">
        <i class="fas fa-bars"></i>
    </button>

    <h2>
        <i class="fas fa-heart" style="color: #e74c3c;"></i> <span>BabiHub</span>
    </h2>

    <a href="/dashboard">
        <i class="fas fa-home"></i> <span>Dashboard</span>
    </a>
    <a href="#">
        <i class="fas fa-camera-retro"></i> <span>Our Memories</span>
    </a>
    <a href="#">
        <i class="fas fa-sticky-note"></i> <span>Shared Notes</span>
    </a>
    <a href="#">
        <i class="fas fa-cog"></i> <span>Settings</span>
    </a>

    <form method="POST" action="{{ route('logout') }}" class="logout-form">
        @csrf
        <button type="submit" class="logout-btn">
            <i class="fas fa-sign-out-alt"></i><span>Logout</span>
        </button>
    </form>
</div>