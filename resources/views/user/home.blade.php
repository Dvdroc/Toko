<x-app-layout>
  <div class="px-40 flex flex-1 justify-center py-5 pt-20">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <!-- Bakery -->
            <div class="@container">
              <div class="@[480px]:p-4">
                <div id="home"
                  class="flex min-h-[280px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[200px]:rounded-xl items-center justify-center p-4"
                  style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.4) 100%), url("image/chocolate-strawberry-cake-on-stand-hero-1080x1080.jpg");'>
                  <div class="flex flex-col gap-2 text-center">
                    <h1
                      class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]">
                      Bakery
                    </h1>
                    <h2 class="text-white text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                      Setiap kue kami dibuat dari bahan terbaik, diracik dengan detail sempurna dan layanan personal yang istimewa hanya untuk Anda.
                    </h2>
                  </div>
                  <!-- Search Bar -->
                  <label class="flex flex-col min-w-40 h-14 w-full max-w-[480px] @[480px]:h-16">
                    <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
                      <div
                        class="text-[#9a4c5f] flex border border-[#e7cfd5] bg-[#fcf8f9] items-center justify-center pl-[15px] rounded-l-xl border-r-0"
                        data-icon="MagnifyingGlass"
                        data-size="20px"
                        data-weight="regular">
                      </div>
                      <div class="relative w-full max-w-[480px]">
                        <input
                        id="cake-search"
                        type="text"
                        placeholder="Search for a cake"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#1b0d11] focus:outline-0 focus:ring-0 border border-[#e7cfd5] bg-[#fcf8f9] focus:border-[#e7cfd5] h-full placeholder:text-[#9a4c5f] px-[15px] rounded-r-none border-r-0 pr-2 rounded-l-none border-l-0 pl-2 text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal"
                      />
                      <div id="search-suggestions" class="absolute bg-white border mt-1 rounded-lg shadow-lg w-full hidden z-50"></div>
                      </div>
                      <div class="flex items-center justify-center rounded-r-xl border-l-0 border border-[#e7cfd5] bg-[#fcf8f9] pr-[7px]">
                        <button 
                          id="Search-button"
                          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#ee2b5c] text-[#fcf8f9] text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]">
                          <span class="truncate">Search</span>
                        </button>
                      </div>
                    </div>
                  </label>
                </div>
              </div>
            </div>

            <h2 class="text-[#1b0d11] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Best Sellers</h2>
            <div id="best-sellers" class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4"></div>
            <h2 class="text-[#1b0d11] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">All Cakes</h2>
            <div id="all-cakes" class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4"></div>
            <div id="pagination" class="flex justify-center gap-2 pb-6"></div>
          </div>
  </div>
</x-app-layout>