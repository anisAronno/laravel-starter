<div class="flex items-center space-x-6 overflow-visible">
    <button class="sidebar-toggle">
      <span class="flex space-x-4">
        <svg
          stroke="currentColor"
          fill="none"
          stroke-width="0"
          viewBox="0 0 24 24"
          height="22"
          width="22"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h8m-8 6h16"
          ></path>
        </svg>
      </span>
    </button>

    <!-- Mobile Search Starts -->
    <div class="sm:hidden">
      <button
        type="button"
        data-trigger="search-modal"
        class="flex items-center justify-center rounded-full text-slate-500 transition-colors duration-150 hover:text-primary-500 focus:text-primary-500 dark:text-slate-400 dark:hover:text-slate-300"
      >
        <i width="22" height="22" data-feather="search"></i>
      </button>
    </div>
    <!-- Mobile Search Ends -->

    <!-- Searchbar Start -->
    <button
      type="button"
      data-trigger="search-modal"
      class="group hidden h-10 w-72 items-center overflow-hidden rounded-primary bg-slate-100 px-3 shadow-sm dark:border-transparent dark:bg-slate-700 sm:flex"
    >
      <i class="text-slate-400" width="1em" height="1em" data-feather="search"></i>
      <span class="ml-2 text-sm text-slate-400">Search</span>
    </button>
    <!-- Searchbar Ends -->
  </div>