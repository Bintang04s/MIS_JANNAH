<?php require_once 'config.php'; ?>

<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200 shadow-sm">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-3">
        <!-- Logo dan Nama Sekolah -->
        <a href="home.php" class="flex items-center space-x-2 rtl:space-x-reverse">
            <!-- Logo Sekolah -->
            <img src="../images/logo.png" class="h-10" alt="Logo MIS Ibtidaiyah Raudhatul Jannah">
            <span class="self-center text-xl font-semibold whitespace-nowrap text-[#2e9149] uppercase">
                <span class="self-center text-base sm:text-lg md:text-xl font-semibold whitespace-nowrap text-[#2e9149] uppercase">
                    <?php echo $site_name; ?>
                </span>
            </span>
        </a>

        <!-- Mobile Menu Button -->
        <div class="flex md:hidden">
            <button id="mobile-menu-button" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-[#2e9149] rounded-lg hover:bg-gray-100 focus:outline-none">
                <span class="sr-only">Buka menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>

        <!-- Navigation Links (Desktop) - Pojok Kanan -->
        <div class="hidden w-full md:flex md:w-auto md:order-1 justify-end" id="navbar-sticky">
            <ul class="flex flex-col md:flex-row md:space-x-6 p-0 md:p-0 mt-4 md:mt-0 font-medium border-0 md:border-0 rounded-none bg-transparent md:bg-white">
                <?php foreach ($nav_links as $link): 
                    $current_page = basename($_SERVER['PHP_SELF']);
                    $is_active = ($current_page === basename($link['url'])) ? 'text-[#2e9149] font-bold' : 'text-gray-600 hover:text-[#2e9149]';
                ?>
                    <li class="relative group">
                        <a href="<?php echo $link['url']; ?>" class="block py-2 px-3 rounded md:p-0 transition duration-300 <?php echo $is_active; ?>">
                            <?php echo $link['name']; ?>
                            <span class="absolute left-0 bottom-0 h-0.5 bg-[#2e9149] w-0 group-hover:w-full transition-all duration-300 <?php echo ($current_page === basename($link['url'])) ? 'w-full' : ''; ?>"></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <div class="hidden md:hidden w-full" id="mobile-menu">
            <ul class="flex flex-col w-full p-0 mt-2 font-medium bg-white shadow-lg rounded-b-lg overflow-hidden">
                <?php foreach ($nav_links as $link): 
                    $current_page = basename($_SERVER['PHP_SELF']);
                    $is_active = ($current_page === basename($link['url'])) ? 'text-[#2e9149] font-bold' : 'text-gray-600 hover:text-[#2e9149]';
                ?>
                    <li class="relative group">
                        <a href="<?php echo $link['url']; ?>" class="block py-2 px-3 rounded transition duration-300 <?php echo $is_active; ?>">
                            <?php echo $link['name']; ?>
                            <span class="absolute left-3 right-3 bottom-1 h-0.5 bg-[#2e9149] w-0 group-hover:w-[calc(100%-1.5rem)] transition-all duration-300 <?php echo ($current_page === basename($link['url'])) ? 'w-[calc(100%-1.5rem)]' : ''; ?>"></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>

<script>
// Mobile Menu Toggle
document.getElementById('mobile-menu-button').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
    // Scroll lock body saat menu mobile terbuka
    if (!mobileMenu.classList.contains('hidden')) {
        document.body.style.overflow = 'hidden';
    } else {
        document.body.style.overflow = '';
    }
});
</script>

<style>
/* Untuk memastikan posisi underline tepat */
li.relative a {
    position: relative;
    display: inline-block;
    padding-bottom: 2px;
}
</style>