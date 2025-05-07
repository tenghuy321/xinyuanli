<style>
    .text-gradient {
        background: linear-gradient(90deg, #ebb81b 0%, #dfad16 45.5%, #faf088 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    @keyframes loading-bar {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(100%);
        }
    }

    .animate-loading-bar {
        animation: loading-bar 1.5s linear infinite;
    }
</style>

<div id="loading-overlay" class="fixed inset-0 bg-white z-[999] hidden transition-opacity duration-[2000ms] opacity-0">
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
        <img src={{ asset('assets/images/loadingImg.png') }} alt="Loading" class="w-20" />
        <h1 class="py-4 text-[18px] font-[700] text-gradient uppercase tracking-[2px]">
            {{ __('messages.xin_yuan_li') }}</h1>
        <div class="w-1/2 md:w-[10%] bg-gray-200 h-1 overflow-hidden">
            <div class="bg-[#EBB81B] h-full animate-loading-bar" style="width: 100%"></div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const loadingOverlay = document.getElementById("loading-overlay");

        window.addEventListener("beforeunload", function() {
            loadingOverlay.classList.remove("hidden");
            loadingOverlay.classList.add("opacity-100");
        });

        window.addEventListener("load", function() {
            setTimeout(() => {
                loadingOverlay.classList.add("hidden");
                loadingOverlay.classList.remove("opacity-100");
            }, 2000);
        });
    });
</script>
