<x-app-layout>

<!-- ====== eCommerce Header Section Start -->
<section
      x-data="
        {
          slides: ['1', '2'],
          activeSlide: 1
        }
      "
      class="relative bg-[#f4f7ff]"
    >
      <div
        class="flex-no-wrap snap mx-auto flex h-auto w-full max-w-[100vw] overflow-hidden transition-all"
        x-ref="carousel"
      >
        <div class="mx-auto h-full min-w-[100vw]">
          <div class="flex flex-wrap items-center">
            <div class="w-full md:w-5/12 lg:w-1/2">
              <div class="mb-12 md:mb-0">
                <img
                  src="./assets/ecom-images/headers/header-01/image-01.jpg"
                  alt="product"
                  class="w-full"
                />
              </div>
            </div>

            <div class="w-full md:w-7/12 lg:w-1/2">
              <div class="mx-8 mb-20 max-w-[520px] md:mb-0 2xl:ml-20">
                <span
                  class="mb-5 block text-lg font-semibold text-primary sm:text-xl md:text-xl lg:text-3xl"
                >
                  Trending Products
                </span>
                <h1
                  class="mb-5 text-[32px] font-bold !leading-tight text-dark sm:text-[42px] md:text-[34px] lg:text-4xl xl:text-[42px]"
                >
                  New Arrival From Mans Collections
                </h1>
                <p class="mb-9 text-base font-medium text-body-color">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                  magna, scelerisque vitae augue et, cursus placerat lorem. In
                  nisi lacus, eleifend tincidunt quam et, consequat semper.
                </p>
                <a
                  href="filters.html"
                  class="inline-flex items-center justify-center border border-black py-3 px-8 text-center text-base font-semibold text-black transition hover:border-black hover:bg-black hover:text-white"
                >
                  Shop Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="mx-auto h-full min-w-[100vw]">
          <div class="flex flex-wrap items-center">
            <div class="w-full md:w-5/12 lg:w-1/2">
              <div class="mb-12 md:mb-0">
                <img
                  src="./assets/ecom-images/headers/header-01/image-01.jpg"
                  alt="product"
                  class="w-full"
                />
              </div>
            </div>

            <div class="w-full md:w-7/12 lg:w-1/2">
              <div class="mx-8 mb-20 max-w-[520px] md:mb-0 2xl:ml-20">
                <span
                  class="mb-5 block text-lg font-semibold text-primary sm:text-xl md:text-xl lg:text-3xl"
                >
                  Trending Products
                </span>
                <h1
                  class="mb-5 text-[32px] font-bold !leading-tight text-dark sm:text-[42px] md:text-[34px] lg:text-4xl xl:text-[42px]"
                >
                  New Arrival From Mans Collections
                </h1>
                <p class="mb-9 text-base font-medium text-body-color">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                  magna, scelerisque vitae augue et, cursus placerat lorem. In
                  nisi lacus, eleifend tincidunt quam et, consequat semper.
                </p>
                <a
                  href="filters.html"
                  class="inline-flex items-center justify-center border border-black py-3 px-8 text-center text-base font-semibold text-black transition hover:border-black hover:bg-black hover:text-white"
                >
                  Shop Now
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="absolute bottom-12 right-12 flex items-center justify-end space-x-4"
      >
        <button
          class="flex h-10 w-10 items-center justify-center border border-body-color text-body-color transition-all hover:border-primary hover:text-primary"
          @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft - ($refs.carousel.scrollWidth / slides.length); activeSlide -= 1"
        >
          <svg width="10" height="18" viewBox="0 0 10 18" class="fill-current">
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M2.30951 9.00278L9.7025 1.75393L9.71157 1.74417C10.0883 1.33897 10.0904 0.706394 9.65025 0.300611C9.44618 0.112467 9.14292 -7.49282e-08 8.8652 -9.92075e-08C8.51706 -1.29642e-07 8.25215 0.142032 8.05041 0.328028L8.04343 0.334467L0.54447 7.71467L0.54358 7.71554C-0.187229 8.4299 -0.171766 9.58059 0.533431 10.3072L0.538425 10.3124L8.04382 17.6715L8.05041 17.6775C8.44903 18.0451 9.16205 18.1551 9.65025 17.705C10.0468 17.3394 10.1669 16.687 9.68767 16.2371L2.30951 9.00278Z"
            />
          </svg>
        </button>
        <button
          class="flex h-10 w-10 items-center justify-center border border-body-color text-body-color transition-all hover:border-primary hover:text-primary"
          @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft + ($refs.carousel.scrollWidth / slides.length); activeSlide += 1"
        >
          <svg width="10" height="18" viewBox="0 0 10 18" class="fill-current">
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M7.69049 8.99722L0.297501 16.2461L0.288433 16.2558C-0.0882772 16.661 -0.0903769 17.2936 0.34975 17.6994C0.553818 17.8875 0.857078 18 1.1348 18C1.48294 18 1.74785 17.858 1.94959 17.672L1.95658 17.6655L9.45553 10.2853L9.45642 10.2845C10.1872 9.5701 10.1718 8.41941 9.46657 7.69275L9.46158 7.68761L1.95618 0.32853L1.94959 0.322458C1.55097 -0.0450574 0.837946 -0.15506 0.34975 0.295041C-0.0467678 0.660617 -0.166916 1.31301 0.312333 1.7629L7.69049 8.99722Z"
            />
          </svg>
        </button>
      </div>
    </section>
    <!-- ====== eCommerce Header Section End -->

    <!-- ====== Recent Products Section Start -->
    <section class="pt-[120px]">
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4">
            <div class="mx-auto mb-12 max-w-[510px] text-center lg:mb-20">
              <span class="mb-2 block text-lg font-semibold text-primary">
                Recent Products
              </span>
              <h2
                class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]"
              >
                Top Collections
              </h2>
              <p class="text-base text-body-color">
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4 md:w-1/2 lg:w-1/3 xl:w-1/4">
            <div class="mb-10">
              <div class="mb-3 overflow-hidden rounded-md">
                <img
                  src="./assets/ecom-images/products/recent-products-01/product-01.jpg"
                  alt="Recent Products"
                  class="w-full"
                />
              </div>
              <div class="flex-wrap justify-between xs:flex">
                <div class="mb-3 xs:mb-0">
                  <h3>
                    <a
                      href="product-details.html"
                      class="inline-block text-lg font-semibold text-black transition hover:text-primary xs:text-xl xl:text-lg 2xl:text-xl"
                    >
                      Men Winter Jacket
                    </a>
                  </h3>
                  <p class="text-base font-medium text-body-color">
                    Item Descriptions
                  </p>
                </div>
                <div>
                  <p class="text-base font-bold text-primary">$35.00</p>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3 xl:w-1/4">
            <div class="mb-10">
              <div class="mb-3 overflow-hidden rounded-md">
                <img
                  src="./assets/ecom-images/products/recent-products-01/product-02.jpg"
                  alt="Recent Products"
                  class="w-full"
                />
              </div>
              <div class="flex-wrap justify-between xs:flex">
                <div class="mb-3 xs:mb-0">
                  <h3>
                    <a
                      href="product-details.html"
                      class="inline-block text-lg font-semibold text-black transition hover:text-primary xs:text-xl xl:text-lg 2xl:text-xl"
                    >
                      Women Collection
                    </a>
                  </h3>
                  <p class="text-base font-medium text-body-color">
                    Item Descriptions
                  </p>
                </div>
                <div>
                  <p class="text-base font-bold text-primary">$35.00</p>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3 xl:w-1/4">
            <div class="mb-10">
              <div class="mb-3 overflow-hidden rounded-md">
                <img
                  src="./assets/ecom-images/products/recent-products-01/product-03.jpg"
                  alt="Recent Products"
                  class="w-full"
                />
              </div>
              <div class="flex-wrap justify-between xs:flex">
                <div class="mb-3 xs:mb-0">
                  <h3>
                    <a
                      href="product-details.html"
                      class="inline-block text-lg font-semibold text-black transition hover:text-primary xs:text-xl xl:text-lg 2xl:text-xl"
                    >
                      Women Sunglass
                    </a>
                  </h3>
                  <p class="text-base font-medium text-body-color">
                    Item Descriptions
                  </p>
                </div>
                <div>
                  <p class="text-base font-bold text-primary">$35.00</p>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3 xl:w-1/4">
            <div class="mb-10">
              <div class="mb-3 overflow-hidden rounded-md">
                <img
                  src="./assets/ecom-images/products/recent-products-01/product-04.jpg"
                  alt="Recent Products"
                  class="w-full"
                />
              </div>
              <div class="flex-wrap justify-between xs:flex">
                <div class="mb-3 xs:mb-0">
                  <h3>
                    <a
                      href="product-details.html"
                      class="inline-block text-lg font-semibold text-black transition hover:text-primary xs:text-xl xl:text-lg 2xl:text-xl"
                    >
                      Man in Black
                    </a>
                  </h3>
                  <p class="text-base font-medium text-body-color">
                    Item Descriptions
                  </p>
                </div>
                <div>
                  <p class="text-base font-bold text-primary">$35.00</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Recent Products Section End -->

    <!-- ====== Featured Products Section Start -->
    <section class="bg-white pt-[90px]">
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4">
            <div class="mx-auto mb-12 max-w-[510px] text-center lg:mb-20">
              <span class="mb-2 block text-lg font-semibold text-primary">
                Trending Items
              </span>
              <h2
                class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]"
              >
                Featured Products
              </h2>
              <p class="text-base text-body-color">
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>

        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4 lg:w-7/12">
            <div
              class="group mb-10 overflow-hidden rounded-lg border border-[#e7e7e7] bg-white"
            >
              <div class="relative">
                <img
                  src="./assets/ecom-images/products/featured-products-01/image-01.jpg"
                  alt="product"
                  class="w-full"
                />

                <div
                  class="absolute bottom-0 left-0 flex h-3/4 w-full items-end bg-gradient-to-t from-[#212C36B2] to-[#212B3600] p-8 opacity-0 transition-all group-hover:opacity-100"
                >
                  <div class="flex items-center space-x-3">
                    <button
                      class="flex h-9 w-9 items-center justify-center rounded bg-white text-center text-black hover:bg-primary hover:text-white"
                    >
                      <svg
                        width="16"
                        height="18"
                        viewBox="0 0 16 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M10.5032 13.5557C9.40635 13.5557 8.50635 14.4838 8.50635 15.6088C8.50635 16.7338 9.40635 17.6619 10.5032 17.6619C11.6001 17.6619 12.5001 16.7338 12.5001 15.6088C12.5282 14.4838 11.6282 13.5557 10.5032 13.5557ZM10.5032 16.6775C9.94072 16.6775 9.49072 16.1994 9.49072 15.6088C9.49072 15.0182 9.94072 14.54 10.5032 14.54C11.0657 14.54 11.5157 15.0182 11.5157 15.6088C11.5438 16.1994 11.0657 16.6775 10.5032 16.6775Z"
                          fill="currentColor"
                        />
                        <path
                          d="M4.1187 13.5557C3.02183 13.5557 2.12183 14.4838 2.12183 15.6088C2.12183 16.7338 3.02183 17.6619 4.1187 17.6619C5.21557 17.6619 6.11557 16.7338 6.11557 15.6088C6.1437 14.4838 5.2437 13.5557 4.1187 13.5557ZM4.1187 16.6775C3.5562 16.6775 3.1062 16.1994 3.1062 15.6088C3.1062 15.0182 3.5562 14.54 4.1187 14.54C4.6812 14.54 5.1312 15.0182 5.1312 15.6088C5.15932 16.1994 4.6812 16.6775 4.1187 16.6775Z"
                          fill="currentColor"
                        />
                        <path
                          d="M15.2563 0.365234H13.4563C13.0344 0.365234 12.6688 0.674609 12.6125 1.09648L12.1063 4.80898H1.05315C0.800022 4.80898 0.575022 4.92148 0.434397 5.11836C0.293772 5.31523 0.237522 5.56836 0.293772 5.79336V5.82148L2.0094 11.1371C2.09377 11.4746 2.40315 11.7277 2.7969 11.7277H11.0938C11.7125 11.7277 12.2188 11.2777 12.3031 10.659L13.5969 1.32148H15.2844C15.5656 1.32148 15.7906 1.09648 15.7906 0.815234C15.7906 0.533984 15.5375 0.365234 15.2563 0.365234ZM11.2906 10.5184C11.2625 10.6309 11.1781 10.7434 11.0375 10.7434H2.88127L1.27815 5.79336H11.9375L11.2906 10.5184Z"
                          fill="currentColor"
                        />
                      </svg>
                    </button>
                    <button
                      class="flex h-9 w-9 items-center justify-center rounded bg-white text-center hover:bg-primary hover:text-white"
                    >
                      <svg
                        width="18"
                        height="18"
                        viewBox="0 0 18 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M9 7.03125C7.90312 7.03125 7.03125 7.93125 7.03125 9C7.03125 10.0687 7.93125 10.9688 9 10.9688C10.0687 10.9688 10.9687 10.0687 10.9687 9C10.9687 7.93125 10.0969 7.03125 9 7.03125ZM9 9.98438C8.46562 9.98438 8.01562 9.53437 8.01562 9C8.01562 8.46563 8.46562 8.01562 9 8.01562C9.53437 8.01562 9.98437 8.46563 9.98437 9C9.98437 9.53437 9.53437 9.98438 9 9.98438Z"
                          fill="currentColor"
                        />
                        <path
                          d="M17.5501 8.66289C15.6938 5.73789 12.4876 3.99414 9.0001 3.99414C5.5126 3.99414 2.30635 5.73789 0.450098 8.66289C0.337598 8.85976 0.337598 9.11289 0.450098 9.30976C2.30635 12.2348 5.5126 13.9785 9.0001 13.9785C12.4876 13.9785 15.6938 12.2348 17.5501 9.30976C17.6907 9.11289 17.6907 8.85976 17.5501 8.66289ZM9.0001 12.9941C5.93447 12.9941 3.09385 11.5035 1.40635 8.97227C3.09385 6.46914 5.93447 4.97852 9.0001 4.97852C12.0657 4.97852 14.9063 6.46914 16.5938 8.97227C14.9063 11.5035 12.0657 12.9941 9.0001 12.9941Z"
                          fill="currentColor"
                        />
                      </svg>
                    </button>
                    <button
                      class="flex h-9 w-9 items-center justify-center rounded bg-white text-center hover:bg-primary hover:text-white"
                    >
                      <svg
                        width="18"
                        height="16"
                        viewBox="0 0 18 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M8.9999 15.7066C8.6624 15.7066 8.29678 15.5941 8.04365 15.341C7.39678 14.7785 6.7499 14.2441 6.1874 13.766C4.52803 12.3598 3.09365 11.1504 2.08115 9.94102C0.899902 8.53477 0.337402 7.18477 0.337402 5.69414C0.337402 4.23164 0.843653 2.88164 1.77178 1.89727C2.6999 0.884766 3.99365 0.322266 5.3999 0.322266C6.44053 0.322266 7.4249 0.659766 8.26865 1.30664C8.52178 1.50352 8.7749 1.72852 8.9999 1.98164C9.2249 1.72852 9.47803 1.50352 9.73115 1.30664C10.5749 0.659766 11.5312 0.322266 12.5999 0.322266C14.0062 0.322266 15.2718 0.884766 16.228 1.89727C17.1562 2.88164 17.6624 4.23164 17.6624 5.69414C17.6624 7.18477 17.0999 8.53477 15.9187 9.94102C14.9062 11.1504 13.4718 12.3598 11.8124 13.766C11.2499 14.2441 10.603 14.7785 9.95615 15.341C9.70303 15.566 9.3374 15.7066 8.9999 15.7066ZM5.3999 1.27852C4.2749 1.27852 3.23428 1.72852 2.50303 2.54414C1.74365 3.35977 1.3499 4.45664 1.3499 5.66602C1.3499 6.90352 1.82803 8.05664 2.84053 9.29414C3.79678 10.4473 5.20303 11.6285 6.83428 13.0066C7.39678 13.4848 8.04365 14.0191 8.69053 14.6098C8.85928 14.7504 9.14053 14.7504 9.30928 14.6098C9.98428 14.0473 10.603 13.4848 11.1655 13.0066C12.7968 11.6285 14.203 10.4473 15.1593 9.29414C16.1718 8.05664 16.6499 6.90352 16.6499 5.66602C16.6499 4.45664 16.228 3.35977 15.4968 2.54414C14.7374 1.72852 13.7249 1.27852 12.5999 1.27852C11.7562 1.27852 10.9968 1.53164 10.3499 2.06602C10.0687 2.26289 9.84365 2.51602 9.59053 2.79727C9.4499 2.96602 9.2249 3.07852 8.9999 3.07852C8.7749 3.07852 8.5499 2.96602 8.40928 2.79727C8.18428 2.51602 7.93115 2.26289 7.6499 2.06602C7.00303 1.55977 6.24365 1.27852 5.3999 1.27852Z"
                          fill="currentColor"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div
                class="relative justify-between py-8 px-6 sm:px-8 md:flex lg:px-6 2xl:px-8"
              >
                <div class="right-8 top-8 mb-2 sm:absolute sm:mb-0">
                  <span
                    class="text-sm font-semibold text-primary sm:text-base 2xl:text-lg"
                  >
                    -50% Flat Discount
                  </span>
                </div>
                <div>
                  <span
                    class="mb-2 block text-base font-semibold text-body-color"
                  >
                    Winter Clothings
                  </span>
                  <h3>
                    <a
                      href="product-details.html"
                      class="mb-2 block text-lg font-semibold text-black hover:text-primary xs:text-xl sm:text-2xl lg:text-2xl xl:text-2xl 2xl:text-3xl"
                    >
                      Women winter sweater
                    </a>
                  </h3>

                  <p class="text-lg font-semibold text-black">
                    <span class="mr-2 text-body-color line-through">
                      £48.00
                    </span>
                    £24.00
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-5/12">
            <div
              class="group mb-10 overflow-hidden rounded-lg border border-[#e7e7e7] bg-white"
            >
              <div class="relative">
                <img
                  src="./assets/ecom-images/products/featured-products-01/image-02.jpg"
                  alt="product"
                  class="w-full"
                />

                <div
                  class="absolute bottom-0 left-0 flex h-3/4 w-full items-end bg-gradient-to-t from-[#212C36B2] to-[#212B3600] p-8 opacity-0 transition-all group-hover:opacity-100"
                >
                  <div class="flex items-center space-x-3">
                    <button
                      class="flex h-9 w-9 items-center justify-center rounded bg-white text-center text-black hover:bg-primary hover:text-white"
                    >
                      <svg
                        width="16"
                        height="18"
                        viewBox="0 0 16 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M10.5032 13.5557C9.40635 13.5557 8.50635 14.4838 8.50635 15.6088C8.50635 16.7338 9.40635 17.6619 10.5032 17.6619C11.6001 17.6619 12.5001 16.7338 12.5001 15.6088C12.5282 14.4838 11.6282 13.5557 10.5032 13.5557ZM10.5032 16.6775C9.94072 16.6775 9.49072 16.1994 9.49072 15.6088C9.49072 15.0182 9.94072 14.54 10.5032 14.54C11.0657 14.54 11.5157 15.0182 11.5157 15.6088C11.5438 16.1994 11.0657 16.6775 10.5032 16.6775Z"
                          fill="currentColor"
                        />
                        <path
                          d="M4.1187 13.5557C3.02183 13.5557 2.12183 14.4838 2.12183 15.6088C2.12183 16.7338 3.02183 17.6619 4.1187 17.6619C5.21557 17.6619 6.11557 16.7338 6.11557 15.6088C6.1437 14.4838 5.2437 13.5557 4.1187 13.5557ZM4.1187 16.6775C3.5562 16.6775 3.1062 16.1994 3.1062 15.6088C3.1062 15.0182 3.5562 14.54 4.1187 14.54C4.6812 14.54 5.1312 15.0182 5.1312 15.6088C5.15932 16.1994 4.6812 16.6775 4.1187 16.6775Z"
                          fill="currentColor"
                        />
                        <path
                          d="M15.2563 0.365234H13.4563C13.0344 0.365234 12.6688 0.674609 12.6125 1.09648L12.1063 4.80898H1.05315C0.800022 4.80898 0.575022 4.92148 0.434397 5.11836C0.293772 5.31523 0.237522 5.56836 0.293772 5.79336V5.82148L2.0094 11.1371C2.09377 11.4746 2.40315 11.7277 2.7969 11.7277H11.0938C11.7125 11.7277 12.2188 11.2777 12.3031 10.659L13.5969 1.32148H15.2844C15.5656 1.32148 15.7906 1.09648 15.7906 0.815234C15.7906 0.533984 15.5375 0.365234 15.2563 0.365234ZM11.2906 10.5184C11.2625 10.6309 11.1781 10.7434 11.0375 10.7434H2.88127L1.27815 5.79336H11.9375L11.2906 10.5184Z"
                          fill="currentColor"
                        />
                      </svg>
                    </button>
                    <button
                      class="flex h-9 w-9 items-center justify-center rounded bg-white text-center hover:bg-primary hover:text-white"
                    >
                      <svg
                        width="18"
                        height="18"
                        viewBox="0 0 18 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M9 7.03125C7.90312 7.03125 7.03125 7.93125 7.03125 9C7.03125 10.0687 7.93125 10.9688 9 10.9688C10.0687 10.9688 10.9687 10.0687 10.9687 9C10.9687 7.93125 10.0969 7.03125 9 7.03125ZM9 9.98438C8.46562 9.98438 8.01562 9.53437 8.01562 9C8.01562 8.46563 8.46562 8.01562 9 8.01562C9.53437 8.01562 9.98437 8.46563 9.98437 9C9.98437 9.53437 9.53437 9.98438 9 9.98438Z"
                          fill="currentColor"
                        />
                        <path
                          d="M17.5501 8.66289C15.6938 5.73789 12.4876 3.99414 9.0001 3.99414C5.5126 3.99414 2.30635 5.73789 0.450098 8.66289C0.337598 8.85976 0.337598 9.11289 0.450098 9.30976C2.30635 12.2348 5.5126 13.9785 9.0001 13.9785C12.4876 13.9785 15.6938 12.2348 17.5501 9.30976C17.6907 9.11289 17.6907 8.85976 17.5501 8.66289ZM9.0001 12.9941C5.93447 12.9941 3.09385 11.5035 1.40635 8.97227C3.09385 6.46914 5.93447 4.97852 9.0001 4.97852C12.0657 4.97852 14.9063 6.46914 16.5938 8.97227C14.9063 11.5035 12.0657 12.9941 9.0001 12.9941Z"
                          fill="currentColor"
                        />
                      </svg>
                    </button>
                    <button
                      class="flex h-9 w-9 items-center justify-center rounded bg-white text-center hover:bg-primary hover:text-white"
                    >
                      <svg
                        width="18"
                        height="16"
                        viewBox="0 0 18 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M8.9999 15.7066C8.6624 15.7066 8.29678 15.5941 8.04365 15.341C7.39678 14.7785 6.7499 14.2441 6.1874 13.766C4.52803 12.3598 3.09365 11.1504 2.08115 9.94102C0.899902 8.53477 0.337402 7.18477 0.337402 5.69414C0.337402 4.23164 0.843653 2.88164 1.77178 1.89727C2.6999 0.884766 3.99365 0.322266 5.3999 0.322266C6.44053 0.322266 7.4249 0.659766 8.26865 1.30664C8.52178 1.50352 8.7749 1.72852 8.9999 1.98164C9.2249 1.72852 9.47803 1.50352 9.73115 1.30664C10.5749 0.659766 11.5312 0.322266 12.5999 0.322266C14.0062 0.322266 15.2718 0.884766 16.228 1.89727C17.1562 2.88164 17.6624 4.23164 17.6624 5.69414C17.6624 7.18477 17.0999 8.53477 15.9187 9.94102C14.9062 11.1504 13.4718 12.3598 11.8124 13.766C11.2499 14.2441 10.603 14.7785 9.95615 15.341C9.70303 15.566 9.3374 15.7066 8.9999 15.7066ZM5.3999 1.27852C4.2749 1.27852 3.23428 1.72852 2.50303 2.54414C1.74365 3.35977 1.3499 4.45664 1.3499 5.66602C1.3499 6.90352 1.82803 8.05664 2.84053 9.29414C3.79678 10.4473 5.20303 11.6285 6.83428 13.0066C7.39678 13.4848 8.04365 14.0191 8.69053 14.6098C8.85928 14.7504 9.14053 14.7504 9.30928 14.6098C9.98428 14.0473 10.603 13.4848 11.1655 13.0066C12.7968 11.6285 14.203 10.4473 15.1593 9.29414C16.1718 8.05664 16.6499 6.90352 16.6499 5.66602C16.6499 4.45664 16.228 3.35977 15.4968 2.54414C14.7374 1.72852 13.7249 1.27852 12.5999 1.27852C11.7562 1.27852 10.9968 1.53164 10.3499 2.06602C10.0687 2.26289 9.84365 2.51602 9.59053 2.79727C9.4499 2.96602 9.2249 3.07852 8.9999 3.07852C8.7749 3.07852 8.5499 2.96602 8.40928 2.79727C8.18428 2.51602 7.93115 2.26289 7.6499 2.06602C7.00303 1.55977 6.24365 1.27852 5.3999 1.27852Z"
                          fill="currentColor"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div
                class="relative justify-between py-8 px-6 sm:px-8 md:flex lg:px-6 2xl:px-8"
              >
                <div>
                  <span
                    class="mb-2 block text-base font-semibold text-body-color"
                  >
                    Ladies Jacket
                  </span>
                  <h3>
                    <a
                      href="product-details.html"
                      class="mb-2 block text-lg font-semibold text-black hover:text-primary xs:text-xl sm:text-2xl lg:text-2xl xl:text-2xl 2xl:text-3xl"
                    >
                      Ladies denim jacket
                    </a>
                  </h3>

                  <p class="text-lg font-semibold text-black">£49.00</p>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-5/12">
            <div
              class="group mb-10 overflow-hidden rounded-lg border border-[#e7e7e7] bg-white"
            >
              <div class="relative">
                <img
                  src="./assets/ecom-images/products/featured-products-01/image-03.jpg"
                  alt="product"
                  class="w-full"
                />

                <div
                  class="absolute bottom-0 left-0 flex h-3/4 w-full items-end bg-gradient-to-t from-[#212C36B2] to-[#212B3600] p-8 opacity-0 transition-all group-hover:opacity-100"
                >
                  <div class="flex items-center space-x-3">
                    <button
                      class="flex h-9 w-9 items-center justify-center rounded bg-white text-center text-black hover:bg-primary hover:text-white"
                    >
                      <svg
                        width="16"
                        height="18"
                        viewBox="0 0 16 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M10.5032 13.5557C9.40635 13.5557 8.50635 14.4838 8.50635 15.6088C8.50635 16.7338 9.40635 17.6619 10.5032 17.6619C11.6001 17.6619 12.5001 16.7338 12.5001 15.6088C12.5282 14.4838 11.6282 13.5557 10.5032 13.5557ZM10.5032 16.6775C9.94072 16.6775 9.49072 16.1994 9.49072 15.6088C9.49072 15.0182 9.94072 14.54 10.5032 14.54C11.0657 14.54 11.5157 15.0182 11.5157 15.6088C11.5438 16.1994 11.0657 16.6775 10.5032 16.6775Z"
                          fill="currentColor"
                        />
                        <path
                          d="M4.1187 13.5557C3.02183 13.5557 2.12183 14.4838 2.12183 15.6088C2.12183 16.7338 3.02183 17.6619 4.1187 17.6619C5.21557 17.6619 6.11557 16.7338 6.11557 15.6088C6.1437 14.4838 5.2437 13.5557 4.1187 13.5557ZM4.1187 16.6775C3.5562 16.6775 3.1062 16.1994 3.1062 15.6088C3.1062 15.0182 3.5562 14.54 4.1187 14.54C4.6812 14.54 5.1312 15.0182 5.1312 15.6088C5.15932 16.1994 4.6812 16.6775 4.1187 16.6775Z"
                          fill="currentColor"
                        />
                        <path
                          d="M15.2563 0.365234H13.4563C13.0344 0.365234 12.6688 0.674609 12.6125 1.09648L12.1063 4.80898H1.05315C0.800022 4.80898 0.575022 4.92148 0.434397 5.11836C0.293772 5.31523 0.237522 5.56836 0.293772 5.79336V5.82148L2.0094 11.1371C2.09377 11.4746 2.40315 11.7277 2.7969 11.7277H11.0938C11.7125 11.7277 12.2188 11.2777 12.3031 10.659L13.5969 1.32148H15.2844C15.5656 1.32148 15.7906 1.09648 15.7906 0.815234C15.7906 0.533984 15.5375 0.365234 15.2563 0.365234ZM11.2906 10.5184C11.2625 10.6309 11.1781 10.7434 11.0375 10.7434H2.88127L1.27815 5.79336H11.9375L11.2906 10.5184Z"
                          fill="currentColor"
                        />
                      </svg>
                    </button>
                    <button
                      class="flex h-9 w-9 items-center justify-center rounded bg-white text-center hover:bg-primary hover:text-white"
                    >
                      <svg
                        width="18"
                        height="18"
                        viewBox="0 0 18 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M9 7.03125C7.90312 7.03125 7.03125 7.93125 7.03125 9C7.03125 10.0687 7.93125 10.9688 9 10.9688C10.0687 10.9688 10.9687 10.0687 10.9687 9C10.9687 7.93125 10.0969 7.03125 9 7.03125ZM9 9.98438C8.46562 9.98438 8.01562 9.53437 8.01562 9C8.01562 8.46563 8.46562 8.01562 9 8.01562C9.53437 8.01562 9.98437 8.46563 9.98437 9C9.98437 9.53437 9.53437 9.98438 9 9.98438Z"
                          fill="currentColor"
                        />
                        <path
                          d="M17.5501 8.66289C15.6938 5.73789 12.4876 3.99414 9.0001 3.99414C5.5126 3.99414 2.30635 5.73789 0.450098 8.66289C0.337598 8.85976 0.337598 9.11289 0.450098 9.30976C2.30635 12.2348 5.5126 13.9785 9.0001 13.9785C12.4876 13.9785 15.6938 12.2348 17.5501 9.30976C17.6907 9.11289 17.6907 8.85976 17.5501 8.66289ZM9.0001 12.9941C5.93447 12.9941 3.09385 11.5035 1.40635 8.97227C3.09385 6.46914 5.93447 4.97852 9.0001 4.97852C12.0657 4.97852 14.9063 6.46914 16.5938 8.97227C14.9063 11.5035 12.0657 12.9941 9.0001 12.9941Z"
                          fill="currentColor"
                        />
                      </svg>
                    </button>
                    <button
                      class="flex h-9 w-9 items-center justify-center rounded bg-white text-center hover:bg-primary hover:text-white"
                    >
                      <svg
                        width="18"
                        height="16"
                        viewBox="0 0 18 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M8.9999 15.7066C8.6624 15.7066 8.29678 15.5941 8.04365 15.341C7.39678 14.7785 6.7499 14.2441 6.1874 13.766C4.52803 12.3598 3.09365 11.1504 2.08115 9.94102C0.899902 8.53477 0.337402 7.18477 0.337402 5.69414C0.337402 4.23164 0.843653 2.88164 1.77178 1.89727C2.6999 0.884766 3.99365 0.322266 5.3999 0.322266C6.44053 0.322266 7.4249 0.659766 8.26865 1.30664C8.52178 1.50352 8.7749 1.72852 8.9999 1.98164C9.2249 1.72852 9.47803 1.50352 9.73115 1.30664C10.5749 0.659766 11.5312 0.322266 12.5999 0.322266C14.0062 0.322266 15.2718 0.884766 16.228 1.89727C17.1562 2.88164 17.6624 4.23164 17.6624 5.69414C17.6624 7.18477 17.0999 8.53477 15.9187 9.94102C14.9062 11.1504 13.4718 12.3598 11.8124 13.766C11.2499 14.2441 10.603 14.7785 9.95615 15.341C9.70303 15.566 9.3374 15.7066 8.9999 15.7066ZM5.3999 1.27852C4.2749 1.27852 3.23428 1.72852 2.50303 2.54414C1.74365 3.35977 1.3499 4.45664 1.3499 5.66602C1.3499 6.90352 1.82803 8.05664 2.84053 9.29414C3.79678 10.4473 5.20303 11.6285 6.83428 13.0066C7.39678 13.4848 8.04365 14.0191 8.69053 14.6098C8.85928 14.7504 9.14053 14.7504 9.30928 14.6098C9.98428 14.0473 10.603 13.4848 11.1655 13.0066C12.7968 11.6285 14.203 10.4473 15.1593 9.29414C16.1718 8.05664 16.6499 6.90352 16.6499 5.66602C16.6499 4.45664 16.228 3.35977 15.4968 2.54414C14.7374 1.72852 13.7249 1.27852 12.5999 1.27852C11.7562 1.27852 10.9968 1.53164 10.3499 2.06602C10.0687 2.26289 9.84365 2.51602 9.59053 2.79727C9.4499 2.96602 9.2249 3.07852 8.9999 3.07852C8.7749 3.07852 8.5499 2.96602 8.40928 2.79727C8.18428 2.51602 7.93115 2.26289 7.6499 2.06602C7.00303 1.55977 6.24365 1.27852 5.3999 1.27852Z"
                          fill="currentColor"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div
                class="relative justify-between py-8 px-6 sm:px-8 md:flex lg:px-6 2xl:px-8"
              >
                <div>
                  <span
                    class="mb-2 block text-base font-semibold text-body-color"
                  >
                    Sunglasses
                  </span>
                  <h3>
                    <a
                      href="product-details.html"
                      class="mb-2 block text-lg font-semibold text-black hover:text-primary xs:text-xl sm:text-2xl lg:text-2xl xl:text-2xl 2xl:text-3xl"
                    >
                      Stylish black sunglass
                    </a>
                  </h3>

                  <p class="text-lg font-semibold text-black">£59.00</p>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-7/12">
            <div
              class="group mb-10 overflow-hidden rounded-lg border border-[#e7e7e7] bg-white"
            >
              <div class="relative">
                <img
                  src="./assets/ecom-images/products/featured-products-01/image-04.jpg"
                  alt="product"
                  class="w-full"
                />

                <div
                  class="absolute bottom-0 left-0 flex h-3/4 w-full items-end bg-gradient-to-t from-[#212C36B2] to-[#212B3600] p-8 opacity-0 transition-all group-hover:opacity-100"
                >
                  <div class="flex items-center space-x-3">
                    <button
                      class="flex h-9 w-9 items-center justify-center rounded bg-white text-center text-black hover:bg-primary hover:text-white"
                    >
                      <svg
                        width="16"
                        height="18"
                        viewBox="0 0 16 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M10.5032 13.5557C9.40635 13.5557 8.50635 14.4838 8.50635 15.6088C8.50635 16.7338 9.40635 17.6619 10.5032 17.6619C11.6001 17.6619 12.5001 16.7338 12.5001 15.6088C12.5282 14.4838 11.6282 13.5557 10.5032 13.5557ZM10.5032 16.6775C9.94072 16.6775 9.49072 16.1994 9.49072 15.6088C9.49072 15.0182 9.94072 14.54 10.5032 14.54C11.0657 14.54 11.5157 15.0182 11.5157 15.6088C11.5438 16.1994 11.0657 16.6775 10.5032 16.6775Z"
                          fill="currentColor"
                        />
                        <path
                          d="M4.1187 13.5557C3.02183 13.5557 2.12183 14.4838 2.12183 15.6088C2.12183 16.7338 3.02183 17.6619 4.1187 17.6619C5.21557 17.6619 6.11557 16.7338 6.11557 15.6088C6.1437 14.4838 5.2437 13.5557 4.1187 13.5557ZM4.1187 16.6775C3.5562 16.6775 3.1062 16.1994 3.1062 15.6088C3.1062 15.0182 3.5562 14.54 4.1187 14.54C4.6812 14.54 5.1312 15.0182 5.1312 15.6088C5.15932 16.1994 4.6812 16.6775 4.1187 16.6775Z"
                          fill="currentColor"
                        />
                        <path
                          d="M15.2563 0.365234H13.4563C13.0344 0.365234 12.6688 0.674609 12.6125 1.09648L12.1063 4.80898H1.05315C0.800022 4.80898 0.575022 4.92148 0.434397 5.11836C0.293772 5.31523 0.237522 5.56836 0.293772 5.79336V5.82148L2.0094 11.1371C2.09377 11.4746 2.40315 11.7277 2.7969 11.7277H11.0938C11.7125 11.7277 12.2188 11.2777 12.3031 10.659L13.5969 1.32148H15.2844C15.5656 1.32148 15.7906 1.09648 15.7906 0.815234C15.7906 0.533984 15.5375 0.365234 15.2563 0.365234ZM11.2906 10.5184C11.2625 10.6309 11.1781 10.7434 11.0375 10.7434H2.88127L1.27815 5.79336H11.9375L11.2906 10.5184Z"
                          fill="currentColor"
                        />
                      </svg>
                    </button>
                    <button
                      class="flex h-9 w-9 items-center justify-center rounded bg-white text-center hover:bg-primary hover:text-white"
                    >
                      <svg
                        width="18"
                        height="18"
                        viewBox="0 0 18 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M9 7.03125C7.90312 7.03125 7.03125 7.93125 7.03125 9C7.03125 10.0687 7.93125 10.9688 9 10.9688C10.0687 10.9688 10.9687 10.0687 10.9687 9C10.9687 7.93125 10.0969 7.03125 9 7.03125ZM9 9.98438C8.46562 9.98438 8.01562 9.53437 8.01562 9C8.01562 8.46563 8.46562 8.01562 9 8.01562C9.53437 8.01562 9.98437 8.46563 9.98437 9C9.98437 9.53437 9.53437 9.98438 9 9.98438Z"
                          fill="currentColor"
                        />
                        <path
                          d="M17.5501 8.66289C15.6938 5.73789 12.4876 3.99414 9.0001 3.99414C5.5126 3.99414 2.30635 5.73789 0.450098 8.66289C0.337598 8.85976 0.337598 9.11289 0.450098 9.30976C2.30635 12.2348 5.5126 13.9785 9.0001 13.9785C12.4876 13.9785 15.6938 12.2348 17.5501 9.30976C17.6907 9.11289 17.6907 8.85976 17.5501 8.66289ZM9.0001 12.9941C5.93447 12.9941 3.09385 11.5035 1.40635 8.97227C3.09385 6.46914 5.93447 4.97852 9.0001 4.97852C12.0657 4.97852 14.9063 6.46914 16.5938 8.97227C14.9063 11.5035 12.0657 12.9941 9.0001 12.9941Z"
                          fill="currentColor"
                        />
                      </svg>
                    </button>
                    <button
                      class="flex h-9 w-9 items-center justify-center rounded bg-white text-center hover:bg-primary hover:text-white"
                    >
                      <svg
                        width="18"
                        height="16"
                        viewBox="0 0 18 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M8.9999 15.7066C8.6624 15.7066 8.29678 15.5941 8.04365 15.341C7.39678 14.7785 6.7499 14.2441 6.1874 13.766C4.52803 12.3598 3.09365 11.1504 2.08115 9.94102C0.899902 8.53477 0.337402 7.18477 0.337402 5.69414C0.337402 4.23164 0.843653 2.88164 1.77178 1.89727C2.6999 0.884766 3.99365 0.322266 5.3999 0.322266C6.44053 0.322266 7.4249 0.659766 8.26865 1.30664C8.52178 1.50352 8.7749 1.72852 8.9999 1.98164C9.2249 1.72852 9.47803 1.50352 9.73115 1.30664C10.5749 0.659766 11.5312 0.322266 12.5999 0.322266C14.0062 0.322266 15.2718 0.884766 16.228 1.89727C17.1562 2.88164 17.6624 4.23164 17.6624 5.69414C17.6624 7.18477 17.0999 8.53477 15.9187 9.94102C14.9062 11.1504 13.4718 12.3598 11.8124 13.766C11.2499 14.2441 10.603 14.7785 9.95615 15.341C9.70303 15.566 9.3374 15.7066 8.9999 15.7066ZM5.3999 1.27852C4.2749 1.27852 3.23428 1.72852 2.50303 2.54414C1.74365 3.35977 1.3499 4.45664 1.3499 5.66602C1.3499 6.90352 1.82803 8.05664 2.84053 9.29414C3.79678 10.4473 5.20303 11.6285 6.83428 13.0066C7.39678 13.4848 8.04365 14.0191 8.69053 14.6098C8.85928 14.7504 9.14053 14.7504 9.30928 14.6098C9.98428 14.0473 10.603 13.4848 11.1655 13.0066C12.7968 11.6285 14.203 10.4473 15.1593 9.29414C16.1718 8.05664 16.6499 6.90352 16.6499 5.66602C16.6499 4.45664 16.228 3.35977 15.4968 2.54414C14.7374 1.72852 13.7249 1.27852 12.5999 1.27852C11.7562 1.27852 10.9968 1.53164 10.3499 2.06602C10.0687 2.26289 9.84365 2.51602 9.59053 2.79727C9.4499 2.96602 9.2249 3.07852 8.9999 3.07852C8.7749 3.07852 8.5499 2.96602 8.40928 2.79727C8.18428 2.51602 7.93115 2.26289 7.6499 2.06602C7.00303 1.55977 6.24365 1.27852 5.3999 1.27852Z"
                          fill="currentColor"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div
                class="relative justify-between py-8 px-6 sm:px-8 md:flex lg:px-6 2xl:px-8"
              >
                <div class="right-8 top-8 mb-2 sm:absolute sm:mb-0">
                  <span
                    class="text-sm font-semibold text-primary sm:text-base 2xl:text-lg"
                  >
                    -50% Flat Discount
                  </span>
                </div>
                <div>
                  <span
                    class="mb-2 block text-base font-semibold text-body-color"
                  >
                    T-shirt
                  </span>
                  <h3>
                    <a
                      href="product-details.html"
                      class="mb-2 block text-lg font-semibold text-black hover:text-primary xs:text-xl sm:text-2xl lg:text-2xl xl:text-2xl 2xl:text-3xl"
                    >
                      Men's regular fit sando t-shirt
                    </a>
                  </h3>

                  <p class="text-lg font-semibold text-black">
                    <span class="mr-2 text-body-color line-through">
                      £120.00
                    </span>
                    £60.00
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Featured Products Section End -->

    <!-- ====== Category Section Start -->
    <section class="bg-white pt-[90px]">
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap items-end">
          <div class="w-full px-4 lg:w-2/3">
            <div class="mb-[60px] max-w-[510px] lg:mb-20">
              <h2
                class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]"
              >
                Shop By Category
              </h2>
              <p class="text-base text-body-color">
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>

          <div class="w-full px-4 lg:w-1/3">
            <div class="mb-[60px] lg:mb-20 lg:text-right">
              <a
                href="filters.html"
                class="inline-flex items-center justify-center rounded-md border border-primary py-3 px-8 text-center text-base text-primary transition hover:border-primary hover:bg-primary hover:text-white"
              >
                Explore All
              </a>
            </div>
          </div>
        </div>

        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div
              class="mb-10 rounded-md border-[.5px] border-[#e7e7e7] bg-white p-[10px] shadow-card"
            >
              <a href="javascript:void(0)" class="block">
                <img
                  src="./assets/ecom-images/categories/category-04/image-01.jpg"
                  alt="category"
                  class="w-full rounded-md"
                />
              </a>
              <div class="px-6 pt-5 pb-6">
                <span class="text-base font-semibold text-body-color">
                  #House
                </span>

                <a
                  href="filters.html"
                  class="block text-lg font-semibold text-black hover:text-primary sm:text-2xl md:text-xl lg:text-lg xl:text-2xl"
                >
                  Beautiful Furniture
                </a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div
              class="mb-10 rounded-md border-[.5px] border-[#e7e7e7] bg-white p-[10px] shadow-card"
            >
              <a href="javascript:void(0)" class="block">
                <img
                  src="./assets/ecom-images/categories/category-04/image-02.jpg"
                  alt="category"
                  class="w-full rounded-md"
                />
              </a>
              <div class="px-6 pt-5 pb-6">
                <span class="text-base font-semibold text-body-color">
                  #Accessories
                </span>

                <a
                  href="filters.html"
                  class="block text-lg font-semibold text-black hover:text-primary sm:text-2xl md:text-xl lg:text-lg xl:text-2xl"
                >
                  Accessories Collection
                </a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div
              class="mb-10 rounded-md border-[.5px] border-[#e7e7e7] bg-white p-[10px] shadow-card"
            >
              <a href="filters.html" class="block">
                <img
                  src="./assets/ecom-images/categories/category-04/image-03.jpg"
                  alt="category"
                  class="w-full rounded-md"
                />
              </a>
              <div class="px-6 pt-5 pb-6">
                <span class="text-base font-semibold text-body-color">
                  #Kitchen
                </span>

                <a
                  href="filters.html"
                  class="block text-lg font-semibold text-black hover:text-primary sm:text-2xl md:text-xl lg:text-lg xl:text-2xl"
                >
                  Kitchen Set Collection
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Category Section End -->

    <!-- ====== Product Grids Start -->
    <section class="bg-white py-20">
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4">
            <div class="mx-auto mb-12 max-w-[510px] text-center lg:mb-20">
              <span class="mb-2 block text-lg font-semibold text-primary">
                Our Best Selling Items
              </span>
              <h2
                class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]"
              >
                Top Collections
              </h2>
              <p class="text-base text-body-color">
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>

        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4 sm:w-1/2 lg:w-1/3 xl:w-1/4">
            <div class="mb-10">
              <div class="relative mb-5 overflow-hidden rounded">
                <img
                  src="./assets/ecom-images/products/products-grids-07/image-01.jpg"
                  alt="product"
                  class="w-full"
                />
              </div>
              <div class="text-center">
                <h3>
                  <a
                    href="product-details.html"
                    class="mb-2 block text-lg font-semibold text-black hover:text-primary xs:text-xl sm:text-lg md:text-xl"
                  >
                    T-shirt for Men's
                  </a>
                </h3>
                <p class="mb-4 text-base font-semibold text-black">
                  <span class="pr-1 text-body-color line-through">
                    $50.00
                  </span>
                  $24.00
                </p>
                <a
                  href="product-details.html"
                  class="inline-flex items-center justify-center rounded-md border border-black py-2 px-5 text-center text-sm font-semibold text-black transition hover:bg-black hover:text-white"
                >
                  Shop Now
                </a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 sm:w-1/2 lg:w-1/3 xl:w-1/4">
            <div class="mb-10">
              <div class="relative mb-5 overflow-hidden rounded">
                <img
                  src="./assets/ecom-images/products/products-grids-07/image-02.jpg"
                  alt="product"
                  class="w-full"
                />
              </div>
              <div class="text-center">
                <h3>
                  <a
                    href="product-details.html"
                    class="mb-2 block text-lg font-semibold text-black hover:text-primary xs:text-xl sm:text-lg md:text-xl"
                  >
                    T-shirt for Women's
                  </a>
                </h3>
                <p class="mb-4 text-base font-semibold text-black">$39.00</p>
                <a
                  href="product-details.html"
                  class="inline-flex items-center justify-center rounded-md border border-black py-2 px-5 text-center text-sm font-semibold text-black transition hover:bg-black hover:text-white"
                >
                  Shop Now
                </a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 sm:w-1/2 lg:w-1/3 xl:w-1/4">
            <div class="mb-10">
              <div class="relative mb-5 overflow-hidden rounded">
                <img
                  src="./assets/ecom-images/products/products-grids-07/image-03.jpg"
                  alt="product"
                  class="w-full"
                />
              </div>
              <div class="text-center">
                <h3>
                  <a
                    href="product-details.html"
                    class="mb-2 block text-lg font-semibold text-black hover:text-primary xs:text-xl sm:text-lg md:text-xl"
                  >
                    Men's Sneakers
                  </a>
                </h3>
                <p class="mb-4 text-base font-semibold text-black">
                  <span class="pr-1 text-body-color line-through">
                    $89.00
                  </span>
                  $78.00
                </p>
                <a
                  href="product-details.html"
                  class="inline-flex items-center justify-center rounded-md border border-black py-2 px-5 text-center text-sm font-semibold text-black transition hover:bg-black hover:text-white"
                >
                  Shop Now
                </a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 sm:w-1/2 lg:w-1/3 xl:w-1/4">
            <div class="mb-10">
              <div class="relative mb-5 overflow-hidden rounded">
                <img
                  src="./assets/ecom-images/products/products-grids-07/image-04.jpg"
                  alt="product"
                  class="w-full"
                />
              </div>
              <div class="text-center">
                <h3>
                  <a
                    href="product-details.html"
                    class="mb-2 block text-lg font-semibold text-black hover:text-primary xs:text-xl sm:text-lg md:text-xl"
                  >
                    Fashionable Bag women
                  </a>
                </h3>
                <p class="mb-4 text-base font-semibold text-black">$159.00</p>
                <a
                  href="product-details.html"
                  class="inline-flex items-center justify-center rounded-md border border-black py-2 px-5 text-center text-sm font-semibold text-black transition hover:bg-black hover:text-white"
                >
                  Shop Now
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Product Grids End -->
</x-app-layout>