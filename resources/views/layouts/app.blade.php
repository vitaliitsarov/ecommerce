<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">

       
<header
  x-data="
        {
          navbarOpen: false,
          searchForm: false,
          wishlistOpen: false,
          cartOpen: false,
          submenuOpen: false,
          categories: false,
          categoryOne: true,
        }
      "
  class="relative z-40 w-full bg-white"
>
  
<div class="hidden border-b border-[#e7e7e7] sm:block">
    <div class="container mx-auto">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4 md:w-2/3 lg:w-1/2">
          <ul class="-mx-3 flex items-center">
            <li>
              <a
                href="javascript:void(0)"
                class="inline-block py-4 px-3 text-sm font-medium text-body-color hover:text-primary"
              >
                About Us
              </a>
            </li>
            <li>
              <a
                href="javascript:void(0)"
                class="inline-block py-4 px-3 text-sm font-medium text-body-color hover:text-primary"
              >
                Order Tracking
              </a>
            </li>
            <li>
              <a
                href="support.html"
                class="inline-block py-4 px-3 text-sm font-medium text-body-color hover:text-primary"
              >
                KONTAKT
              </a>
            </li>
            <li>
              <a
                href="javascript:void(0)"
                class="inline-block py-4 px-3 text-sm font-medium text-body-color hover:text-primary"
              >
                FAQs
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="border-b border-[#e7e7e7] lg:py-4">
    <div class="container mx-auto">
      <div
        class="relative -mx-4 flex items-center justify-center sm:justify-between"
      >
        <div class="w-48 max-w-full px-4 sm:w-60 lg:w-48">
          <a href="/" class="block w-full py-5 lg:py-3">
            <img
              src="https://extaz.pl/img/logo-black.svg"
              alt="logo"
              class="w-full"
            />
          </a>
        </div>
        <div
          class="w-full items-center justify-end px-4 sm:flex lg:justify-between"
        >
          <div class="hidden w-full lg:flex">
            <form
              class="relative flex w-full items-center rounded-md border border-[#e7e7e7] bg-[#f4f7ff]"
            >
              <input
                type="text"
                placeholder="I'm shopping for..."
                class="w-full bg-transparent py-3 pl-6 pr-[58px] text-base font-medium text-body-color outline-none"
              />
              <button
                class="absolute top-0 right-0 flex h-full w-[52px] items-center justify-center rounded-tr-md rounded-br-md border border-primary bg-primary text-white"
              >
                <svg
                  width="27"
                  height="26"
                  viewBox="0 0 27 26"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M4.36182 10.9229C4.36182 6.54719 7.909 3 12.2847 3C16.6604 3 20.2076 6.54719 20.2076 10.9229C20.2076 15.2985 16.6604 18.8457 12.2847 18.8457C7.909 18.8457 4.36182 15.2985 4.36182 10.9229ZM12.2847 4.77157C8.88742 4.77157 6.13339 7.5256 6.13339 10.9229C6.13339 14.3201 8.88742 17.0742 12.2847 17.0742C15.6819 17.0742 18.436 14.3201 18.436 10.9229C18.436 7.5256 15.6819 4.77157 12.2847 4.77157Z"
                    fill="white"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M16.7351 16.511C17.1231 16.213 17.6792 16.286 17.9771 16.674L22.0714 22.0051C22.3694 22.3931 22.2964 22.9492 21.9084 23.2471C21.5205 23.5451 20.9644 23.4721 20.6664 23.0841L16.5721 17.753C16.2741 17.365 16.3471 16.809 16.7351 16.511Z"
                    fill="white"
                  />
                </svg>
              </button>
            </form>
          </div>
          <div class="flex w-full items-center justify-end space-x-4">
            <div class="hidden items-center pr-1 md:flex">
              <div
                class="mr-3 flex h-10 w-10 items-center justify-center rounded-full border-[.5px] border-[#e7e7e7] bg-[#f4f7ff]"
              >
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M19.8343 12.6844C19.7655 11.8938 19.1124 11.3438 18.3218 11.3438H3.67804C2.88742 11.3438 2.26867 11.9281 2.16554 12.6844L1.44367 19.9031C1.40929 20.3156 1.54679 20.7625 1.82179 21.0719C2.09679 21.3812 2.50929 21.5531 2.95617 21.5531H19.078C19.4905 21.5531 19.903 21.3812 20.2124 21.0719C20.4874 20.7625 20.6249 20.35 20.5905 19.9031L19.8343 12.6844ZM19.2843 20.2812C19.2499 20.3156 19.1812 20.3844 19.0437 20.3844H2.95617C2.85304 20.3844 2.74992 20.3156 2.71554 20.2812C2.68117 20.2469 2.61242 20.1781 2.64679 20.0406L3.36867 12.7875C3.36867 12.6156 3.50617 12.5125 3.67804 12.5125H18.3562C18.528 12.5125 18.6312 12.6156 18.6655 12.7875L19.3874 20.0406C19.353 20.1438 19.3187 20.2469 19.2843 20.2812Z"
                    fill="#212B36"
                  />
                  <path
                    d="M11 14.0254C9.65937 14.0254 8.59375 15.091 8.59375 16.4316C8.59375 17.7723 9.65937 18.8379 11 18.8379C12.3406 18.8379 13.4062 17.7723 13.4062 16.4316C13.4062 15.091 12.3406 14.0254 11 14.0254ZM11 17.6348C10.3469 17.6348 9.79688 17.0848 9.79688 16.4316C9.79688 15.7785 10.3469 15.2285 11 15.2285C11.6531 15.2285 12.2031 15.7785 12.2031 16.4316C12.2031 17.0848 11.6531 17.6348 11 17.6348Z"
                    fill="#212B36"
                  />
                  <path
                    d="M2.26875 6.73769C2.3375 8.25019 3.67812 8.86894 4.36562 8.86894H6.77188C6.80625 8.86894 6.80625 8.86894 6.80625 8.86894C7.8375 8.80019 8.86875 8.11269 8.86875 6.73769V5.91269C10.0031 5.91269 12.6156 5.91269 13.75 5.91269V6.73769C13.75 8.11269 14.7812 8.80019 15.8125 8.86894H15.8469H18.2188C18.9062 8.86894 20.2469 8.25019 20.3156 6.73769C20.3156 6.63457 20.3156 6.25644 20.3156 5.91269C20.3156 5.63769 20.3156 5.39707 20.3156 5.36269C20.3156 5.32832 20.3156 5.29394 20.3156 5.29394C20.2125 4.33144 19.8687 3.54082 19.2844 2.92207L19.25 2.88769C18.3906 2.09707 17.3594 1.6502 16.5688 1.3752C14.2656 0.481445 11.3781 0.481445 11.2406 0.481445C9.2125 0.51582 7.90625 0.687695 5.94687 1.3752C5.19062 1.61582 4.15938 2.06269 3.3 2.85332L3.26562 2.88769C2.68125 3.50644 2.3375 4.29707 2.23438 5.25957C2.23438 5.29394 2.23438 5.32832 2.23438 5.32832C2.23438 5.39707 2.23438 5.60332 2.23438 5.87832C2.26875 6.18769 2.26875 6.60019 2.26875 6.73769ZM4.125 3.71269C4.8125 3.09394 5.67188 2.71582 6.39375 2.44082C8.18125 1.78769 9.35 1.65019 11.3094 1.61582C11.4469 1.61582 14.1281 1.6502 16.1906 2.44082C16.9125 2.71582 17.7719 3.05957 18.4594 3.71269C18.8375 4.12519 19.0781 4.67519 19.1469 5.32832C19.1469 5.43144 19.1469 5.60332 19.1469 5.87832C19.1469 6.22207 19.1469 6.60019 19.1469 6.70332C19.1125 7.49394 18.3562 7.66582 18.2531 7.66582H15.8813C15.5375 7.63144 14.9875 7.49394 14.9875 6.73769V5.32832C14.9875 5.05332 14.8156 4.84707 14.575 4.74394C14.3688 4.67519 8.35313 4.67519 8.14688 4.74394C7.90625 4.81269 7.73438 5.05332 7.73438 5.32832V6.73769C7.73438 7.49394 7.18437 7.63144 6.84062 7.66582H4.46875C4.36562 7.66582 3.60937 7.49394 3.575 6.70332C3.575 6.60019 3.575 6.22207 3.575 5.87832C3.575 5.60332 3.575 5.46582 3.575 5.36269C3.50625 4.67519 3.74688 4.12519 4.125 3.71269Z"
                    fill="#212B36"
                  />
                </svg>
              </div>
              <div>
                <p class="text-sm font-medium text-black">
                  Need Help?
                  <br />
                  +001 123 456 789
                </p>
              </div>
            </div>
            <div>
              <button
                class="relative flex h-10 w-10 items-center justify-center rounded-full border-[.5px] border-[#e7e7e7] bg-[#f4f7ff] text-dark"
              >
                <svg
                  width="20"
                  height="20"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M10.9998 12.5125C13.8186 12.5125 16.1217 10.2094 16.1217 7.39062C16.1217 4.57188 13.8186 2.23438 10.9998 2.23438C8.18105 2.23438 5.87793 4.5375 5.87793 7.35625C5.87793 10.175 8.18105 12.5125 10.9998 12.5125ZM10.9998 3.4375C13.1654 3.4375 14.9186 5.19062 14.9186 7.35625C14.9186 9.52187 13.1654 11.275 10.9998 11.275C8.83418 11.275 7.08105 9.52187 7.08105 7.35625C7.08105 5.225 8.83418 3.4375 10.9998 3.4375Z"
                    fill="#212B36"
                  />
                  <path
                    d="M21.3467 18.7002C18.4936 16.2596 14.8155 14.9189 10.9999 14.9189C7.18425 14.9189 3.50613 16.2596 0.653003 18.7002C0.378004 18.9064 0.343629 19.2846 0.584254 19.5596C0.790503 19.8002 1.16863 19.8346 1.44363 19.6283C4.0905 17.3939 7.49363 16.1564 11.0343 16.1564C14.5749 16.1564 17.978 17.3939 20.6249 19.6283C20.728 19.7314 20.8655 19.7658 21.003 19.7658C21.1749 19.7658 21.3467 19.6971 21.4499 19.5596C21.6561 19.2846 21.6217 18.9064 21.3467 18.7002Z"
                    fill="#212B36"
                  />
                </svg>
              </button>
            </div>
            <div class="relative z-20">
              <div class="flex max-w-[200px] justify-end">
                <button
                  @click="wishlistOpen = !wishlistOpen"
                  class="relative flex h-10 w-10 items-center justify-center rounded-full border-[.5px] border-[#e7e7e7] bg-[#f4f7ff] text-dark"
                >
                  <svg
                    width="20"
                    height="20"
                    viewBox="0 0 26 26"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M13.0002 23.0002C12.5716 23.0002 12.1073 22.8539 11.7859 22.5249C10.9645 21.7936 10.1431 21.0989 9.42877 20.4773C7.32162 18.6492 5.5002 17.077 4.21448 15.5048C2.71448 13.6766 2.0002 11.9216 2.0002 9.98374C2.0002 8.08246 2.64305 6.32744 3.82162 5.04773C5.0002 3.73146 6.64305 3.0002 8.42877 3.0002C9.7502 3.0002 11.0002 3.43895 12.0716 4.2799C12.3931 4.53584 12.7145 4.82835 13.0002 5.15742C13.2859 4.82835 13.6073 4.53584 13.9288 4.2799C15.0002 3.43895 16.2145 3.0002 17.5716 3.0002C19.3573 3.0002 20.9645 3.73146 22.1788 5.04773C23.3573 6.32744 24.0002 8.08246 24.0002 9.98374C24.0002 11.9216 23.2859 13.6766 21.7859 15.5048C20.5002 17.077 18.6788 18.6492 16.5716 20.4773C15.8573 21.0989 15.0359 21.7936 14.2145 22.5249C13.8931 22.8174 13.4288 23.0002 13.0002 23.0002ZM8.42877 4.24334C7.0002 4.24334 5.67877 4.82835 4.7502 5.88868C3.78591 6.94901 3.28591 8.37497 3.28591 9.94718C3.28591 11.556 3.89305 13.055 5.17877 14.6638C6.39305 16.1629 8.17877 17.6985 10.2502 19.4901C10.9645 20.1117 11.7859 20.8064 12.6073 21.5742C12.8216 21.757 13.1788 21.757 13.3931 21.5742C14.2502 20.843 15.0359 20.1117 15.7502 19.4901C17.8216 17.6985 19.6073 16.1629 20.8216 14.6638C22.1073 13.055 22.7145 11.556 22.7145 9.94718C22.7145 8.37497 22.1788 6.94901 21.2502 5.88868C20.2859 4.82835 19.0002 4.24334 17.5716 4.24334C16.5002 4.24334 15.5359 4.57241 14.7145 5.26711C14.3573 5.52305 14.0716 5.85211 13.7502 6.21775C13.5716 6.43712 13.2859 6.58338 13.0002 6.58338C12.7145 6.58338 12.4288 6.43712 12.2502 6.21775C11.9645 5.85211 11.6431 5.52305 11.2859 5.26711C10.4645 4.60897 9.5002 4.24334 8.42877 4.24334Z"
                      fill="#212B36"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.2585 4.04521C12.5091 4.24477 12.7619 4.46758 13.0002 4.71385C13.2385 4.46758 13.4913 4.24477 13.7419 4.04521L13.7435 4.04391C14.8653 3.16342 16.1442 2.7002 17.5716 2.7002C19.4444 2.7002 21.1305 3.46895 22.3993 4.84431C23.6343 6.18534 24.3002 8.01564 24.3002 9.98374C24.3002 12.0065 23.5508 13.8266 22.0181 15.6947C20.7379 17.2602 18.9398 18.8201 16.8903 20.5981L16.7686 20.7037C16.5209 20.9192 16.2618 21.1423 15.995 21.372C15.4876 21.8088 14.9524 22.2696 14.4152 22.7479C14.04 23.0887 13.5048 23.3002 13.0002 23.3002C12.5141 23.3002 11.969 23.1365 11.579 22.7423C11.0438 22.266 10.5108 21.8071 10.0054 21.372C9.73865 21.1423 9.47956 20.9192 9.23189 20.7037C9.1912 20.6684 9.15061 20.6332 9.11012 20.5981C7.0607 18.8202 5.26261 17.2603 3.98239 15.6949C2.44959 13.8267 1.7002 12.0066 1.7002 9.98374C1.7002 8.01639 2.36539 6.18693 3.59952 4.84604C4.83546 3.46658 6.55928 2.7002 8.42877 2.7002C9.81948 2.7002 11.1343 3.16282 12.2568 4.04391L12.2585 4.04521ZM3.82162 5.04773C2.64305 6.32744 2.0002 8.08246 2.0002 9.98374C2.0002 11.9216 2.71448 13.6766 4.21448 15.5048C5.47824 17.0501 7.25956 18.5955 9.32105 20.3839L9.42877 20.4773C9.67408 20.6908 9.93203 20.9129 10.1983 21.1422C10.7073 21.5804 11.2466 22.0448 11.7859 22.5249C12.1073 22.8539 12.5716 23.0002 13.0002 23.0002C13.4288 23.0002 13.8931 22.8174 14.2145 22.5249C14.7538 22.0448 15.2931 21.5804 15.8021 21.1421C16.0684 20.9129 16.3263 20.6908 16.5716 20.4773L16.6793 20.3839C18.7408 18.5955 20.5222 17.0501 21.7859 15.5048C23.2859 13.6766 24.0002 11.9216 24.0002 9.98374C24.0002 8.08246 23.3573 6.32744 22.1788 5.04773C20.9645 3.73146 19.3573 3.0002 17.5716 3.0002C16.2145 3.0002 15.0002 3.43895 13.9288 4.2799C13.6818 4.47658 13.4348 4.69484 13.204 4.9347C13.1344 5.00698 13.0664 5.08122 13.0002 5.15742C12.934 5.08122 12.866 5.00698 12.7964 4.9347C12.5656 4.69484 12.3186 4.47658 12.0716 4.2799C11.0002 3.43895 9.7502 3.0002 8.42877 3.0002C6.64305 3.0002 5.0002 3.73146 3.82162 5.04773ZM4.97214 6.09052C4.06508 7.08792 3.58591 8.43851 3.58591 9.94718C3.58591 11.4697 4.15695 12.9045 5.41247 14.4757C6.58673 15.9252 8.31036 17.4158 10.3452 19.1756L10.4464 19.2632C10.5954 19.3928 10.7502 19.5267 10.9084 19.6634C11.5028 20.1773 12.1549 20.741 12.8062 21.3494C12.9092 21.4331 13.0976 21.432 13.1983 21.346C13.6996 20.9183 14.1671 20.499 14.6143 20.0979C14.9361 19.8092 15.2474 19.53 15.5533 19.2638L15.6552 19.1756C17.6901 17.4158 19.4137 15.9251 20.588 14.4757C21.8434 12.9044 22.4145 11.4697 22.4145 9.94718C22.4145 8.44444 21.9031 7.09072 21.0264 6.08846C20.1174 5.09005 18.9122 4.54334 17.5716 4.54334C16.5665 4.54334 15.672 4.85019 14.9082 5.49617L14.899 5.50394L14.8892 5.51095C14.5695 5.74006 14.3094 6.03596 13.9883 6.40132L13.979 6.41184C13.7476 6.69331 13.3807 6.88338 13.0002 6.88338C12.6176 6.88338 12.2487 6.69118 12.0175 6.40713L12.0138 6.4025C11.7408 6.05318 11.4394 5.74617 11.1112 5.51095L11.1046 5.50626L11.0983 5.50123C10.3264 4.88278 9.42742 4.54334 8.42877 4.54334C7.08392 4.54334 5.84571 5.09308 4.97589 6.08632L4.97214 6.09052ZM13.7502 6.21775L13.7749 6.18961C14.0864 5.83524 14.3665 5.51647 14.7145 5.26711C15.5359 4.57241 16.5002 4.24334 17.5716 4.24334C19.0002 4.24334 20.2859 4.82835 21.2502 5.88868C22.1788 6.94901 22.7145 8.37497 22.7145 9.94718C22.7145 11.556 22.1073 13.055 20.8216 14.6638C19.6304 16.1345 17.8892 17.6403 15.8678 19.3885L15.7502 19.4901C15.453 19.7487 15.1435 20.0263 14.8216 20.315C14.3698 20.7202 13.8936 21.1472 13.3931 21.5742C13.1788 21.757 12.8216 21.757 12.6073 21.5742C11.9588 20.968 11.3103 20.4074 10.7145 19.8923C10.5556 19.755 10.4005 19.621 10.2502 19.4901L10.1326 19.3885C8.11124 17.6403 6.37002 16.1345 5.17877 14.6638C3.89305 13.055 3.28591 11.556 3.28591 9.94718C3.28591 8.37497 3.78591 6.94901 4.7502 5.88868C5.67877 4.82835 7.0002 4.24334 8.42877 4.24334C9.5002 4.24334 10.4645 4.60897 11.2859 5.26711C11.6431 5.52305 11.9645 5.85211 12.2502 6.21775C12.4288 6.43712 12.7145 6.58338 13.0002 6.58338C13.2859 6.58338 13.5716 6.43712 13.7502 6.21775Z"
                      fill="#212B36"
                    />
                  </svg>

                  <span
                    class="absolute -top-1 -right-1 h-4 w-4 rounded-full bg-primary text-[10px] font-semibold text-white"
                  >
                    3
                  </span>
                </button>
              </div>
              <div
                x-show="wishlistOpen"
                @click.outside="wishlistOpen = false"
                class="absolute top-full right-0 mt-5 w-[330px]"
              >
                <div
                  class="overflow-hidden rounded-lg border border-[#e7e7e7] bg-white py-8 px-6 shadow-card"
                >
                  <div class="border-b border-[#e7e7e7] pb-3">
                    <div class="-mx-1 flex items-center justify-between pb-4">
                      <div class="flex items-center px-1">
                        <div
                          class="mr-3 h-10 w-full max-w-[40px] overflow-hidden rounded"
                        >
                          <img
                            src="./assets/ecom-images/checkout/checkout-02/image-02.jpg"
                            alt="product image"
                            class="w-full"
                          />
                        </div>
                        <div>
                          <p class="text-sm font-medium text-black">
                            Circular Sienna
                          </p>
                          <p
                            class="truncate text-xs font-medium text-body-color"
                          >
                            Awesome white shirt
                          </p>
                        </div>
                      </div>
                      <div class="px-1">
                        <p class="text-base font-semibold text-black">$36.00</p>
                      </div>
                    </div>
                    <div class="-mx-1 flex items-center justify-between py-4">
                      <div class="flex items-center px-1">
                        <div
                          class="mr-3 h-10 w-full max-w-[40px] overflow-hidden rounded"
                        >
                          <img
                            src="./assets/ecom-images/checkout/checkout-02/image-03.jpg"
                            alt="product image"
                            class="w-full"
                          />
                        </div>
                        <div>
                          <p class="text-sm font-medium text-black">
                            Black T-shirt
                          </p>
                          <p
                            class="truncate text-xs font-medium text-body-color"
                          >
                            It's a nice black t-shirt
                          </p>
                        </div>
                      </div>
                      <div class="px-1">
                        <p class="text-base font-semibold text-black">$36.00</p>
                      </div>
                    </div>
                  </div>

                  <div>
                    <a
                      href="wishlist.html"
                      class="flex w-full items-center justify-center rounded-md bg-primary py-[10px] px-10 text-center text-base font-normal text-white hover:bg-opacity-90"
                    >
                      Go to Wishlist
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="relative z-20">
              <div class="flex max-w-[200px] justify-end">
                <button
                  @click="cartOpen = !cartOpen"
                  class="relative flex h-10 w-10 items-center justify-center rounded-full border-[.5px] border-[#e7e7e7] bg-[#f4f7ff] text-dark"
                >
                  <svg
                    width="20"
                    height="20"
                    viewBox="0 0 26 26"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M23.2783 8.00273H22.0596L19.2971 0.974601C19.1346 0.608976 18.7283 0.446476 18.3627 0.568351C17.9971 0.730851 17.8346 1.1371 17.9564 1.50273L20.5158 8.04335H5.44395L8.00332 1.50273C8.16582 1.1371 7.9627 0.730851 7.59707 0.568351C7.23145 0.405851 6.8252 0.608976 6.6627 0.974601L3.9002 8.00273H2.68145C2.07207 8.00273 1.54395 8.49023 1.54395 9.14023V12.5934C1.54395 13.2027 2.03145 13.7309 2.68145 13.7309H2.72207L3.77832 22.9934C3.94082 24.4152 5.15957 25.5121 6.62207 25.5121H19.2971C20.7596 25.5121 21.9783 24.4152 22.1408 22.9934L23.1971 13.7309H23.2377C23.8471 13.7309 24.3752 13.2434 24.3752 12.5934V9.14023C24.4158 8.53085 23.9283 8.00273 23.2783 8.00273ZM3.00645 9.4246H22.9939V12.2684H3.00645V9.4246ZM20.7596 22.7902C20.6783 23.5215 20.0689 24.0496 19.3377 24.0496H6.6627C5.93145 24.0496 5.32207 23.5215 5.24082 22.7902L4.18457 13.6902H21.8158L20.7596 22.7902Z"
                      fill="#212B36"
                    />
                    <path
                      d="M8.73467 20.6375C9.14092 20.6375 9.46592 20.3125 9.46592 19.9062V16.7781C9.46592 16.3719 9.14092 16.0469 8.73467 16.0469C8.32842 16.0469 8.00342 16.3719 8.00342 16.7781V19.9062C8.00342 20.3125 8.32842 20.6375 8.73467 20.6375Z"
                      fill="#212B36"
                    />
                    <path
                      d="M17.2659 20.6375C17.6722 20.6375 17.9972 20.3125 17.9972 19.9062V16.7781C17.9972 16.3719 17.6722 16.0469 17.2659 16.0469C16.8597 16.0469 16.5347 16.3719 16.5347 16.7781V19.9062C16.5753 20.3125 16.9003 20.6375 17.2659 20.6375Z"
                      fill="#212B36"
                    />
                  </svg>

                  <span
                    class="absolute -top-1 -right-1 h-4 w-4 rounded-full bg-primary text-[10px] font-semibold text-white"
                  >
                    1
                  </span>
                </button>
              </div>
              <div
                x-show="cartOpen"
                @click.outside="cartOpen = false"
                class="absolute top-full right-0 mt-5 w-[330px]"
              >
                <div
                  class="overflow-hidden rounded-lg bg-white p-8 shadow-card"
                >
                  <div class="mb-5 border-b border-[#e7e7e7] pb-3">
                    <div class="-mx-1 flex items-center justify-between pb-4">
                      <div class="flex items-center px-1">
                        <div
                          class="mr-3 h-10 w-full max-w-[40px] overflow-hidden rounded"
                        >
                          <img
                            src="./assets/ecom-images/checkout/checkout-02/image-02.jpg"
                            alt="product image"
                            class="w-full"
                          />
                        </div>
                        <div>
                          <a
                            href="product-details.html"
                            class="text-sm font-medium text-black hover:text-primary"
                          >
                            Circular Sienna
                          </a>
                          <p
                            class="truncate text-xs font-medium text-body-color"
                          >
                            Awesome white shirt
                          </p>
                        </div>
                      </div>
                      <div class="px-1">
                        <p class="text-base font-semibold text-black">$36.00</p>
                      </div>
                    </div>
                    <div class="-mx-1 flex items-center justify-between py-4">
                      <div class="flex items-center px-1">
                        <div
                          class="mr-3 h-10 w-full max-w-[40px] overflow-hidden rounded"
                        >
                          <img
                            src="./assets/ecom-images/checkout/checkout-02/image-03.jpg"
                            alt="product image"
                            class="w-full"
                          />
                        </div>
                        <div>
                          <a
                            href="product-details.html"
                            class="text-sm font-medium text-black hover:text-primary"
                          >
                            Black T-shirt
                          </a>
                          <p
                            class="truncate text-xs font-medium text-body-color"
                          >
                            It's a nice black t-shirt
                          </p>
                        </div>
                      </div>
                      <div class="px-1">
                        <p class="text-base font-semibold text-black">$36.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="-mx-1 border-b border-[#e7e7e7] pb-5">
                    <div class="mb-3 flex items-center justify-between">
                      <div class="px-1">
                        <p class="text-base font-medium text-black">Subtotal</p>
                      </div>
                      <div class="px-1">
                        <p class="text-base font-semibold text-black">$108</p>
                      </div>
                    </div>
                    <div class="mb-3 flex items-center justify-between">
                      <div class="px-1">
                        <p class="text-base font-medium text-black">
                          Shipping Cost (+)
                        </p>
                      </div>
                      <div class="px-1">
                        <p class="text-base font-semibold text-black">$10.85</p>
                      </div>
                    </div>
                    <div class="flex items-center justify-between">
                      <div class="px-1">
                        <p class="text-base font-medium text-black">
                          Discount (-)
                        </p>
                      </div>
                      <div class="px-1">
                        <p class="text-base font-semibold text-black">$9.00</p>
                      </div>
                    </div>
                  </div>
                  <div
                    class="-mx-1 flex items-center justify-between pt-5 pb-6"
                  >
                    <div class="px-1">
                      <p class="text-base font-medium text-black">
                        Wartość koszyka
                      </p>
                    </div>
                    <div class="px-1">
                      <p class="text-base font-semibold text-black">$88.15</p>
                    </div>
                  </div>

                  <div>
                    <a
                      href="{{ route('checkout.index') }}"
                      class="flex w-full items-center justify-center rounded-md bg-primary py-[10px] px-10 text-center text-base font-normal text-white hover:bg-opacity-90"
                    >
                        Zobacz koszyk
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="container mx-auto">
      <div class="relative -mx-4 flex items-center justify-between">
        <div class="w-full max-w-full px-4 lg:w-60">
          <div class="relative py-4" @click.outside="categories = false ">
            <a
              href="javascript:void(0)"
              @click="categories = !categories "
              class="inline-flex items-center justify-between whitespace-nowrap rounded bg-primary px-5 py-2 text-base font-medium text-white hover:bg-opacity-90"
            >
              <span class="pr-2">
                <svg
                  width="18"
                  height="12"
                  viewBox="0 0 18 12"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M17.1562 5.52246H0.843652C0.562402 5.52246 0.337402 5.74746 0.337402 6.02871C0.337402 6.30996 0.562402 6.50684 0.843652 6.50684H17.1562C17.4374 6.50684 17.6624 6.28184 17.6624 6.00059C17.6624 5.71934 17.4374 5.52246 17.1562 5.52246Z"
                    fill="white"
                  />
                  <path
                    d="M17.1562 10.4717H0.843652C0.562402 10.4717 0.337402 10.6967 0.337402 10.9779C0.337402 11.2592 0.562402 11.4561 0.843652 11.4561H17.1562C17.4374 11.4561 17.6624 11.2311 17.6624 10.9498C17.6624 10.6686 17.4374 10.4717 17.1562 10.4717Z"
                    fill="white"
                  />
                  <path
                    d="M0.843652 1.52832H17.1562C17.4374 1.52832 17.6624 1.30332 17.6624 1.02207C17.6624 0.74082 17.4374 0.543945 17.1562 0.543945H0.843652C0.562402 0.543945 0.337402 0.768945 0.337402 1.0502C0.337402 1.33145 0.562402 1.52832 0.843652 1.52832Z"
                    fill="white"
                  />
                </svg>
              </span>

              All categories

              <span class="pl-3">
                <svg
                  width="11"
                  height="6"
                  viewBox="0 0 11 6"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M5.39683 5.40046C5.20176 5.40046 5.00669 5.33284 4.84413 5.1807L0.487528 0.920728C0.373737 0.802396 0.373737 0.616445 0.471272 0.498112C0.585064 0.37978 0.76388 0.37978 0.877671 0.481208L5.23427 4.74118C5.31555 4.8257 5.46185 4.8257 5.55939 4.74118L9.91599 0.481208C10.0298 0.362875 10.2086 0.37978 10.3224 0.498112C10.4362 0.616445 10.4199 0.802396 10.3061 0.920728L5.94953 5.16379C5.78697 5.31594 5.5919 5.40046 5.39683 5.40046Z"
                    fill="currentColor"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M4.56447 5.4667L0.199071 1.19812C-0.0611467 0.927515 -0.0588086 0.512326 0.16261 0.243696L0.172344 0.231887L0.182952 0.220855C0.450688 -0.0575644 0.874846 -0.0571462 1.14383 0.182609L1.15072 0.188754L5.39683 4.34069L9.63276 0.198704C9.93371 -0.108224 10.3725 -0.0268578 10.6107 0.220855C10.9 0.521698 10.829 0.954046 10.5944 1.19798L10.5854 1.20743L6.22292 5.4559C5.99907 5.66539 5.70971 5.80046 5.39683 5.80046C5.10561 5.80046 4.81129 5.69783 4.5708 5.47274L4.56447 5.4667ZM9.91599 0.481208L5.55939 4.74118C5.46185 4.8257 5.31555 4.8257 5.23427 4.74118L0.877671 0.481208C0.76388 0.37978 0.585064 0.37978 0.471272 0.498112C0.373737 0.616445 0.373737 0.802396 0.487528 0.920728L4.84413 5.1807C5.00669 5.33284 5.20176 5.40046 5.39683 5.40046C5.5919 5.40046 5.78697 5.31594 5.94953 5.16379L10.3061 0.920728C10.4199 0.802396 10.4362 0.616445 10.3224 0.498112C10.2086 0.37978 10.0298 0.362875 9.91599 0.481208Z"
                    fill="currentColor"
                  />
                </svg>
              </span>
            </a>

            <div
              :class="categories ? 'block' : 'hidden' "
              class="absolute left-0 top-[115%] z-10 w-[250px] rounded-lg border-[.5px] border-[#e7e7e7] bg-white py-4 transition-all"
            >
              <span
                class="absolute -top-[6px] left-6 -z-10 hidden h-3 w-3 rotate-45 rounded-sm border-[.5px] border-r-0 border-b-0 border-[#e7e7e7] bg-white lg:block"
              ></span>
              <div class="px-6">
                <a
                  href="filters.html"
                  class="flex items-center justify-between rounded py-2 text-sm font-medium text-body-color hover:text-primary"
                >
                  Arts & Crafts
                </a>
              </div>
              <div class="group relative px-6">
                <a
                  href="javascript:void(0)"
                  @click="categoryOne = !categoryOne "
                  class="flex items-center justify-between rounded py-2 text-sm font-medium text-body-color hover:text-primary group-hover:text-primary"
                >
                  Fashion

                  <span>
                    <svg
                      width="5"
                      height="10"
                      viewBox="0 0 5 10"
                      class="fill-current"
                    >
                      <path
                        d="M4.6552 5.34793C4.6552 5.51608 4.59691 5.68423 4.46577 5.82436L0.793668 9.57975C0.691666 9.67784 0.531376 9.67784 0.429373 9.59376C0.32737 9.49567 0.32737 9.34154 0.414801 9.24345L4.0869 5.48806C4.15976 5.41799 4.15976 5.29188 4.0869 5.2078L0.414801 1.45241C0.312798 1.35433 0.32737 1.20019 0.429373 1.1021C0.531375 1.00401 0.691665 1.01802 0.793668 1.11611L4.45119 4.8715C4.58234 5.01163 4.6552 5.17978 4.6552 5.34793Z"
                      />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M4.71229 6.06542L1.03278 9.8284C0.799518 10.0527 0.441625 10.0507 0.210066 9.85983L0.199887 9.85144L0.190377 9.8423C-0.0496206 9.61151 -0.0492601 9.24588 0.157409 9.01402L0.162706 9.00808L3.74167 5.34793L0.171283 1.69656C-0.0932893 1.43713 -0.0231519 1.0589 0.190377 0.853566C0.449703 0.604191 0.822388 0.665372 1.03266 0.867578L1.04081 0.875411L4.70299 4.63584C4.88357 4.82879 5 5.07822 5 5.34793C5 5.59896 4.91153 5.85266 4.71751 6.05997L4.71229 6.06542ZM0.414801 1.45241L4.0869 5.2078C4.15976 5.29188 4.15976 5.41799 4.0869 5.48806L0.414801 9.24345C0.32737 9.34154 0.32737 9.49567 0.429373 9.59376C0.531376 9.67784 0.691666 9.67784 0.793668 9.57975L4.46577 5.82436C4.59691 5.68423 4.6552 5.51608 4.6552 5.34793C4.6552 5.17978 4.58234 5.01163 4.45119 4.8715L0.793668 1.11611C0.691665 1.01802 0.531375 1.00401 0.429373 1.1021C0.32737 1.20019 0.312798 1.35433 0.414801 1.45241Z"
                      />
                    </svg>
                  </span>
                </a>

                <div
                  :class="!categoryOne ? 'hidden lg:block' : 'block' "
                  class="left-full top-0 border-[#e7e7e7] bg-white py-2 group-hover:visible group-hover:opacity-100 lg:invisible lg:absolute lg:w-[600px] lg:rounded lg:border-[.5px] lg:py-8 lg:px-8 lg:opacity-0 xl:w-[650px]"
                >
                  <div class="-mx-2 flex flex-wrap">
                    <div class="w-full px-2 lg:w-1/3">
                      <div>
                        <h3 class="mb-3 text-base font-semibold text-black">
                          New Arrivals
                        </h3>
                        <a
                          href="filters.html"
                          class="block rounded py-2 text-sm font-medium text-body-color hover:text-primary"
                        >
                          Dresses
                        </a>
                        <a
                          href="filters.html"
                          class="block rounded py-2 text-sm font-medium text-body-color hover:text-primary"
                        >
                          Jackets
                        </a>
                        <a
                          href="filters.html"
                          class="block rounded py-2 text-sm font-medium text-body-color hover:text-primary"
                        >
                          Sweatshirts
                        </a>
                        <a
                          href="filters.html"
                          class="block rounded py-2 text-sm font-medium text-body-color hover:text-primary"
                        >
                          Tops & Tees
                        </a>
                        <a
                          href="filters.html"
                          class="block rounded py-2 text-sm font-medium text-body-color hover:text-primary"
                        >
                          Party Dresses
                        </a>
                      </div>
                    </div>
                    <div class="w-full px-2 lg:w-1/3">
                      <div>
                        <h3 class="mb-3 text-base font-semibold text-black">
                          New Arrivals
                        </h3>
                        <a
                          href="filters.html"
                          class="block rounded py-2 text-sm font-medium text-body-color hover:text-primary"
                        >
                          Dresses
                        </a>
                        <a
                          href="filters.html"
                          class="block rounded py-2 text-sm font-medium text-body-color hover:text-primary"
                        >
                          Jackets
                        </a>
                        <a
                          href="filters.html"
                          class="block rounded py-2 text-sm font-medium text-body-color hover:text-primary"
                        >
                          Sweatshirts
                        </a>
                        <a
                          href="filters.html"
                          class="block rounded py-2 text-sm font-medium text-body-color hover:text-primary"
                        >
                          Tops & Tees
                        </a>
                        <a
                          href="filters.html"
                          class="block rounded py-2 text-sm font-medium text-body-color hover:text-primary"
                        >
                          Party Dresses
                        </a>
                      </div>
                    </div>
                    <div class="w-full px-2 lg:w-1/3">
                      <a href="javascript:void(0)" class="rounded">
                        <img
                          src="./assets/ecom-images/navbars/navbar-02/bannder.jpg"
                          alt="banner"
                          class="w-full rounded"
                        />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="px-6">
                <a
                  href="filters.html"
                  class="flex items-center justify-between rounded py-2 text-sm font-medium text-body-color hover:text-primary"
                >
                  Bags & Shoes
                </a>
              </div>
              <div class="px-6">
                <a
                  href="filters.html"
                  class="block rounded py-2 text-sm font-medium text-body-color hover:text-primary"
                >
                  Jewelry & Watch
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="flex w-full items-center justify-between px-4">
          <div class="w-full">
            <button
              @click="navbarOpen = !navbarOpen"
              :class="navbarOpen && 'navbarTogglerActive' "
              id="navbarToggler"
              class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
            >
              <span
                class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"
              ></span>
              <span
                class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"
              ></span>
              <span
                class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"
              ></span>
            </button>
            <nav
              :class="!navbarOpen && 'hidden' "
              id="navbarCollapse"
              class="absolute right-4 top-full w-full max-w-[250px] justify-center rounded-lg bg-white py-5 px-6 shadow lg:static lg:flex lg:w-full lg:max-w-full lg:justify-end lg:bg-transparent lg:py-0 lg:px-0 lg:shadow-none"
            >
              <ul class="blcok items-center lg:flex">
                <li>
                  <a
                    href="filters.html"
                    class="flex justify-between py-2 text-base font-medium text-dark hover:text-primary lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6"
                  >
                    Mens
                  </a>
                </li>
                <li>
                  <a
                    href="filters.html"
                    class="flex justify-between py-2 text-base font-medium text-dark hover:text-primary lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6"
                  >
                    Womans
                  </a>
                </li>
                <li>
                  <a
                    href="filters.html"
                    class="flex justify-between py-2 text-base font-medium text-dark hover:text-primary lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6"
                  >
                    Kids
                  </a>
                </li>
                <li>
                  <a
                    href="filters.html"
                    class="flex justify-between py-2 text-base font-medium text-dark hover:text-primary lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6"
                  >
                    Electronic Items
                  </a>
                </li>
                <li>
                  <a
                    href="filters.html"
                    class="flex justify-between py-2 text-base font-medium text-dark hover:text-primary lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6"
                  >
                    Kitchen Accessories
                  </a>
                </li>
                <li>
                  <a
                    href="filters.html"
                    class="flex justify-between py-2 text-base font-medium text-dark hover:text-primary lg:mx-5 lg:hidden lg:py-6 xl:inline-flex 2xl:mx-6"
                  >
                    News & Blogs
                  </a>
                </li>
                <li>
                  <a
                    href="support.html"
                    class="flex justify-between py-2 text-base font-medium text-dark hover:text-primary lg:mx-5 lg:hidden lg:py-6 xl:inline-flex 2xl:mx-6"
                  >
                    Contact Us
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>


        {{ $slot }}



        <footer>
  <div class="container mx-auto">
    <div
      class="rounded-lg border border-[#e7e7e7] bg-[#f4f7ff] px-6 pt-20 pb-6 sm:px-8 xl:px-14"
    >
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4 md:w-5/12 lg:w-1/3">
          <div class="mb-14">
            <a href="/" class="mb-8 inline-block">
              <img
                src="https://extaz.pl/img/logo-black.svg"
                alt=""
                class="max-w-full"
              />
            </a>
            <p class="mb-10 text-base font-medium text-body-color">
                © 2021-2023 Extaz.pl
            </p>

            <div class="flex items-center space-x-3">
              <a
                href="javascript:void(0)"
                class="flex h-8 w-8 items-center justify-center rounded-full border-[.5px] border-[#e7e7e7] bg-white text-body-color transition-all hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  width="8"
                  height="14"
                  viewBox="0 0 8 14"
                  class="fill-current"
                >
                  <path
                    d="M7.43902 5.6H6.19918H5.75639V5.14839V3.74839V3.29677H6.19918H7.12906C7.3726 3.29677 7.57186 3.11613 7.57186 2.84516V0.451613C7.57186 0.203226 7.39474 0 7.12906 0H5.51285C3.76379 0 2.54609 1.26452 2.54609 3.13871V5.10323V5.55484H2.10329H0.597778C0.287819 5.55484 0 5.80323 0 6.16452V7.79032C0 8.10645 0.243539 8.4 0.597778 8.4H2.05901H2.50181V8.85161V13.3903C2.50181 13.7065 2.74535 14 3.09959 14H5.18075C5.31359 14 5.42429 13.9323 5.51285 13.8419C5.60141 13.7516 5.66783 13.5935 5.66783 13.4581V8.87419V8.42258H6.13276H7.12906C7.41688 8.42258 7.63828 8.24194 7.68256 7.97097V7.94839V7.92581L7.99252 6.36774C8.01466 6.20968 7.99252 6.02903 7.85968 5.84839C7.8154 5.73548 7.61614 5.62258 7.43902 5.6Z"
                  />
                </svg>
              </a>
              <a
                href="javascript:void(0)"
                class="flex h-8 w-8 items-center justify-center rounded-full border-[.5px] border-[#e7e7e7] bg-white text-body-color transition-all hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  width="14"
                  height="10"
                  viewBox="0 0 14 10"
                  class="fill-current"
                >
                  <path
                    d="M12.4419 1.72211L13.3 0.782779C13.5484 0.528376 13.6161 0.332681 13.6387 0.234834C12.9613 0.587084 12.329 0.704501 11.9226 0.704501H11.7645L11.6742 0.626223C11.1323 0.215264 10.4548 0 9.73226 0C8.15161 0 6.90968 1.13503 6.90968 2.44618C6.90968 2.52446 6.90968 2.64188 6.93226 2.72016L7 3.11155L6.52581 3.09198C3.63548 3.0137 1.26452 0.861057 0.880645 0.489237C0.248387 1.46771 0.609677 2.40705 0.993548 2.99413L1.76129 4.09002L0.541936 3.50294C0.564516 4.32485 0.925806 4.97065 1.62581 5.44031L2.23548 5.8317L1.62581 6.04697C2.00968 7.04501 2.86774 7.45597 3.5 7.61252L4.33548 7.80822L3.54516 8.27789C2.28065 9.06067 0.7 9.00196 0 8.94325C1.42258 9.80431 3.11613 10 4.29032 10C5.17097 10 5.82581 9.92172 5.98387 9.86301C12.3065 8.57143 12.6 3.67906 12.6 2.70059V2.5636L12.7355 2.48532C13.5032 1.8591 13.8194 1.52642 14 1.33072C13.9323 1.35029 13.8419 1.38943 13.7516 1.409L12.4419 1.72211Z"
                  />
                </svg>
              </a>
              <a
                href="javascript:void(0)"
                class="flex h-8 w-8 items-center justify-center rounded-full border-[.5px] border-[#e7e7e7] bg-white text-body-color transition-all hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  width="14"
                  height="10"
                  viewBox="0 0 14 10"
                  class="fill-current"
                >
                  <path
                    d="M13.7065 1.56682C13.5484 0.9447 13.0742 0.460829 12.4645 0.299539C11.3806 5.49352e-08 7 0 7 0C7 0 2.61935 5.49352e-08 1.53548 0.299539C0.925806 0.460829 0.451613 0.9447 0.293548 1.56682C0 2.69585 0 5 0 5C0 5 0 7.32719 0.293548 8.43318C0.451613 9.0553 0.925806 9.53917 1.53548 9.70046C2.61935 10 7 10 7 10C7 10 11.3806 10 12.4645 9.70046C13.0742 9.53917 13.5484 9.0553 13.7065 8.43318C14 7.32719 14 5 14 5C14 5 14 2.69585 13.7065 1.56682ZM5.6 7.14286V2.85714L9.23548 5L5.6 7.14286Z"
                  />
                </svg>
              </a>
              <a
                href="javascript:void(0)"
                class="flex h-8 w-8 items-center justify-center rounded-full border-[.5px] border-[#e7e7e7] bg-white text-body-color transition-all hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  width="13"
                  height="12"
                  viewBox="0 0 13 12"
                  class="fill-current"
                >
                  <path
                    d="M11.9334 0H1.64722C1.16111 0 0.772217 0.387097 0.772217 0.870968V11.129C0.772217 11.5935 1.16111 12 1.64722 12H11.8945C12.3806 12 12.7695 11.6129 12.7695 11.129V0.851613C12.8084 0.387097 12.4195 0 11.9334 0ZM4.33058 10.2H2.56112V4.49032H4.33058V10.2ZM3.43613 3.69677C2.85279 3.69677 2.40556 3.23226 2.40556 2.67097C2.40556 2.10968 2.87223 1.64516 3.43613 1.64516C4.00002 1.64516 4.46669 2.10968 4.46669 2.67097C4.46669 3.23226 4.03891 3.69677 3.43613 3.69677ZM11.039 10.2H9.26951V7.43226C9.26951 6.77419 9.25006 5.90323 8.33617 5.90323C7.40282 5.90323 7.26671 6.63871 7.26671 7.37419V10.2H5.49725V4.49032H7.22782V5.28387H7.24727C7.50005 4.81935 8.06394 4.35484 8.93895 4.35484C10.7473 4.35484 11.0779 5.51613 11.0779 7.10323V10.2H11.039Z"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>

        <div class="w-full px-4 md:w-7/12 lg:w-1/3">
          <div class="mb-14">
            <h3 class="mb-8 text-xl font-semibold text-black">Useful Links</h3>
            <div
              class="-mx-4 flex flex-wrap space-y-3 sm:space-y-0 lg:space-y-3 xl:space-y-0"
            >
              <div class="w-full px-4 sm:w-1/2 lg:w-full xl:w-1/2">
                <ul class="space-y-3">
                  <li>
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base font-medium text-body-color hover:text-primary"
                    >
                      Legal & Privacy
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base font-medium text-body-color hover:text-primary"
                    >
                      Contact
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base font-medium text-body-color hover:text-primary"
                    >
                      Gift Card
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base font-medium text-body-color hover:text-primary"
                    >
                      Customer Service
                    </a>
                  </li>
                </ul>
              </div>
              <div class="w-full px-4 sm:w-1/2 lg:w-full xl:w-1/2">
                <ul class="space-y-3">
                  <li>
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base font-medium text-body-color hover:text-primary"
                    >
                      Women
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base font-medium text-body-color hover:text-primary"
                    >
                      Accessories
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base font-medium text-body-color hover:text-primary"
                    >
                      Men
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base font-medium text-body-color hover:text-primary"
                    >
                      Gift
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="w-full px-4 md:w-8/12 lg:w-1/3">
          <div class="mb-14">
            <h3 class="mb-8 text-xl font-semibold text-black">
             {{ __('Zapisz się do newslettera') }}
            </h3>

            <p class="mb-8 text-base font-medium text-body-color">
              {{ __('Dowiedz się o nowych konkursach, promocjach, nowościach i ciekawostkach!') }}
            </p>

            <form class="flex items-center justify-between">
              <input
                type="email"
                placeholder="{{ __('Twój adres e-mail') }}"
                class="h-14 w-full rounded-tl-lg rounded-bl-lg border border-[#e7e7e7] bg-white px-5 outline-none focus:border-primary"
              />
              <button
                class="h-14 rounded-tr-lg rounded-br-lg border border-l-0 border-[#e7e7e7] bg-white px-5"
              >
                <svg
                  width="23"
                  height="16"
                  viewBox="0 0 23 16"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M20.4614 0H2.12681C0.9534 0 0 0.983452 0 2.19385V13.8061C0 15.0165 0.9534 16 2.12681 16H20.4614C21.6348 16 22.5882 15.0165 22.5882 13.8061V2.19385C22.5882 0.983452 21.6348 0 20.4614 0ZM20.4614 1.32388C20.6448 1.32388 20.7914 1.3617 20.9381 1.47518L11.8075 7.18676C11.4775 7.37589 11.1108 7.37589 10.7807 7.18676L1.65011 1.47518C1.79679 1.39953 1.94347 1.32388 2.12681 1.32388H20.4614ZM20.4614 14.6383H2.12681C1.68678 14.6383 1.28342 14.26 1.28342 13.7683V2.79905L10.084 8.32151C10.4507 8.54846 10.8541 8.66194 11.2574 8.66194C11.6608 8.66194 12.0642 8.54846 12.4309 8.32151L21.2315 2.79905V13.7683C21.3048 14.26 20.9015 14.6383 20.4614 14.6383Z"
                    fill="#3056D3"
                  />
                </svg>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="px-6 py-8 pb-6 sm:px-8 xl:px-14">
      <div class="-mx-4 flex flex-wrap items-center">
        <div class="w-full px-4 xl:w-8/12">
          <div class="-mx-3 flex flex-wrap justify-center xl:justify-start">
            <a
              href="javascript:void(0)"
              class="mb-4 inline-flex px-3 text-base font-medium text-body-color hover:text-primary"
            >
              Payment
            </a>
            <a
              href="javascript:void(0)"
              class="mb-4 inline-flex px-3 text-base font-medium text-body-color hover:text-primary"
            >
              Shipping & Returns
            </a>
            <a
              href="javascript:void(0)"
              class="mb-4 inline-flex px-3 text-base font-medium text-body-color hover:text-primary"
            >
              Gift Cards
            </a>
            <a
              href="javascript:void(0)"
              class="mb-4 inline-flex px-3 text-base font-medium text-body-color hover:text-primary"
            >
              Privacy Policy
            </a>
            <a
              href="javascript:void(0)"
              class="mb-4 inline-flex px-3 text-base font-medium text-body-color hover:text-primary"
            >
              Stockists
            </a>
          </div>
        </div>
        <div class="w-full px-4 xl:w-4/12">
          <div class="mt-2 xl:mt-0 xl:mb-4">
            <img
              src="./assets/ecom-images/footers/footer-02/payment.svg"
              alt="payment"
              class="mx-auto max-w-full xl:ml-0"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

    </body>
</html>
