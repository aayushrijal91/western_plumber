<header class="bg-white">
    <div class="shadow-lg relative">
        <div class="container">
            <div class="flex flex-wrap justify-between py-3">
                <div class="w-fit flex flex-wrap gap-x-7 md:gap-x-10">
                    <a href="tel:<?= $phone_number ?>" class="w-fit flex gap-x-3 items-center font-merge text-xl leading-none text-primary">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.43107 0.719727C4.61417 0.687085 3.79912 0.965827 3.18071 1.57092L1.61736 3.10059C0.992202 3.71235 0.794325 4.51249 0.868213 5.27218C0.942035 6.03196 1.24714 6.77825 1.59722 7.4911C5.46812 13.1334 11.2097 21.4347 17.4944 22.2606C18.2519 22.3514 19.0563 22.172 19.6815 21.5601L21.2449 20.0304C22.4816 18.8202 22.4296 16.7953 21.1775 15.5157L18.867 13.1544C18.4329 12.7108 17.7437 12.6229 17.2123 12.9433L14.1717 14.7776C14.0216 14.8681 13.5305 14.9046 13.3927 14.844C10.9619 13.7756 9.22084 12.0645 8.19198 9.53752C8.13523 9.39804 8.18456 8.90494 8.27905 8.75558L10.1784 5.75523C10.5103 5.23092 10.4375 4.54039 10.0035 4.09687L7.69253 1.73573C7.06647 1.09597 6.24792 0.752019 5.43106 0.719379L5.43107 0.719727Z" fill="#FF69D5" />
                            <path d="M12.17 1.3419C12.0329 1.33763 11.8997 1.38794 11.7998 1.48183C11.6999 1.57572 11.6412 1.70554 11.637 1.84262C11.6327 1.97963 11.6829 2.11276 11.7768 2.21271C11.8705 2.31266 12.0002 2.37128 12.1372 2.3757C14.3392 2.44608 16.5108 3.3538 18.1392 5.08874C19.6901 6.7412 20.4609 8.83717 20.4712 10.9357C20.4718 11.0728 20.5269 11.2041 20.6243 11.3006C20.7216 11.3971 20.8533 11.451 20.9904 11.4504C21.1276 11.4498 21.2589 11.3946 21.3554 11.2971C21.4519 11.1996 21.5058 11.0678 21.505 10.9306C21.4936 8.58176 20.6262 6.22694 18.8932 4.38062C17.0736 2.44191 14.6347 1.42052 12.1699 1.34174L12.17 1.3419Z" fill="#FF69D5" />
                            <path d="M12.0841 3.79713C11.947 3.79286 11.8138 3.84317 11.7139 3.93706C11.6139 4.03094 11.5553 4.16077 11.551 4.29785C11.5468 4.43501 11.5972 4.5682 11.6911 4.66823C11.7851 4.76818 11.9151 4.82673 12.0522 4.83085C13.6282 4.87966 15.1814 5.52744 16.3471 6.76955C17.4566 7.9516 18.0069 9.44982 18.0137 10.9506C18.0143 11.0877 18.0693 11.2189 18.1667 11.3154C18.264 11.4119 18.3958 11.4658 18.5329 11.4652C18.67 11.4646 18.8012 11.4096 18.8977 11.3122C18.9942 11.2148 19.0481 11.0831 19.0475 10.946C19.0396 9.19466 18.3927 7.43793 17.1012 6.06196C15.744 4.61601 13.9231 3.85415 12.0841 3.79723L12.0841 3.79713Z" fill="#FF69D5" />
                            <path d="M12.0134 6.28897C11.8763 6.28448 11.743 6.33472 11.6429 6.42853C11.5429 6.52234 11.4842 6.65209 11.4798 6.78917C11.4753 6.92626 11.5255 7.05952 11.6193 7.15955C11.7131 7.25965 11.8428 7.31835 11.98 7.32276C12.9161 7.35293 13.837 7.73724 14.5301 8.47575C15.191 9.1799 15.517 10.07 15.5208 10.9632C15.5214 11.1004 15.5764 11.2318 15.6737 11.3284C15.7711 11.425 15.9029 11.479 16.0401 11.4784C16.1773 11.4779 16.3087 11.4229 16.4053 11.3255C16.5019 11.2281 16.5559 11.0963 16.5553 10.9591C16.5505 9.81523 16.1273 8.66638 15.2841 7.76803C14.4 6.82595 13.2122 6.32754 12.0135 6.28883L12.0134 6.28897Z" fill="#FF69D5" />
                        </svg>
                        <span class="hidden lg:block"><?= $phone_number ?></span>
                    </a>

                    <a href="mailto:<?= $admin_email ?>" class="w-fit flex gap-x-3 items-center font-merge text-xl leading-none text-primary">
                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.23665 1.70008L1.51165 0.204097C1.81155 0.0665932 2.13644 -0.00299936 2.4645 9.91303e-05H20.5359C20.864 -0.00299982 21.1889 0.0665932 21.4888 0.204097L19.7638 1.70008L11.8535 8.56799C11.7631 8.68309 11.6273 8.74994 11.4839 8.74994C11.3405 8.74994 11.2047 8.68309 11.1143 8.56799L3.23665 1.70008ZM22.7045 1.36858L21.3574 2.55007L12.9376 9.84298C12.5532 10.2258 12.0418 10.4418 11.5083 10.4465C10.9563 10.4376 10.4282 10.2129 10.0298 9.81748L1.64286 2.55018L0.295714 1.3687C0.106188 1.73197 0.00470952 2.1374 0 2.55018V14.45C0 15.1263 0.259615 15.775 0.72174 16.2532C1.18389 16.7314 1.81074 17 2.46429 17H20.5357C21.1893 17 21.8161 16.7314 22.2783 16.2532C22.7404 15.775 23 15.1263 23 14.45V2.55018C22.9953 2.1374 22.8938 1.73197 22.7043 1.3687L22.7045 1.36858Z" fill="#FF69D5" />
                        </svg>

                        <span class="hidden lg:block"><?= $admin_email ?></span>
                    </a>
                </div>

                <div class="w-fit flex flex-wrap gap-x-5">
                    <p class="w-fit hidden lg:flex items-center leading-none text-secondary font-merge text-xl gap-x-3">
                        <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.5 0L15.1501 6.476L22.4371 7.9463L17.4061 13.419L18.2595 20.8037L11.5 17.71L4.74047 20.8037L5.59394 13.419L0.56285 7.9463L7.84985 6.476L11.5 0Z" fill="#FF69D5" />
                        </svg>
                        5 Star Reviews
                    </p>

                    <div class="w-fit flex items-center gap-x-7">
                        <div class="w-fit h-[20px]">
                            <div class="h-full relative">
                                <div class="pulsating-circle top-0"></div>
                            </div>
                        </div>
                        <span class="leading-none text-secondary font-merge text-xl">Open 24/7</span>
                    </div>

                    <p class="w-fit hidden xl:flex items-center leading-none text-secondary font-merge text-xl gap-x-3">
                        <svg width="19" height="23" viewBox="0 0 19 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.50034 0.479187C4.30445 0.479187 0.0820312 4.7016 0.0820312 9.8975C0.0820312 12.0928 1.58085 14.5376 3.3189 16.758C5.05708 18.9783 7.07154 20.9524 8.23112 22.0319C8.92996 22.6825 10.0384 22.6838 10.7383 22.0345C11.9015 20.9557 13.9234 18.9813 15.6684 16.7606C17.4133 14.54 18.9186 12.0943 18.9186 9.89762C18.9186 4.70173 14.6962 0.479316 9.50034 0.479316V0.479187ZM9.50034 4.96131C11.6025 4.96131 13.3168 6.67464 13.3168 8.77682C13.3168 10.879 11.6026 12.5923 9.50034 12.5923C7.3981 12.5923 5.68387 10.879 5.68387 8.77682C5.68387 6.67464 7.3981 4.96131 9.50034 4.96131Z" fill="#FF69D5" />
                        </svg>

                        Servicing All of West Melbourne
                    </p>
                </div>
            </div>
        </div>
    </div>

    <nav class="bg-primary py-3">
        <div class="container">
            <div class="flex flex-wrap justify-between items-center">
                <a href="./" class="w-1/2 md:w-fit">
                    <?= renderImg('logo.png', 'logo') ?>
                </a>

                <ul class="w-fit hidden xl:flex flex-wrap gap-x-5">
                    <li><a href="#todays-offer" class="text-white font-medium capitalize">Today's Deals</a></li>
                    <li><a href="#services" class="text-white font-medium capitalize">Services</a></li>
                    <li><a href="#about-us" class="text-white font-medium capitalize">About Us</a></li>
                    <li><a href="#how-it-works" class="text-white font-medium capitalize">How it works</a></li>
                    <li><a href="#why-us" class="text-white font-medium capitalize">why call us?</a></li>
                    <li><a href="#form" class="text-white font-medium capitalize">get a quote</a></li>
                    <li><a href="#faqs" class="text-white font-medium capitalize">FAQs</a></li>
                </ul>

                <div class="w-fit flex flex-wrap gap-3">
                    <a href="#form" class="w-[53px] md:w-fit flex justify-center items-center rounded-lg leading-none shadow-md bg-pink text-white font-bold h-[53px] md:px-7">
                        <svg class="md:hidden" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                        </svg>
                        <span class="hidden md:block">Book Online</span>
                    </a>
                    <a href="tel:<?= $phone_number ?>" class="w-fit hidden md:flex items-center rounded-lg leading-none shadow-md bg-secondary text-white font-bold h-[53px] px-7">Call <?= $phone_number ?></a>
                </div>
            </div>
        </div>
    </nav>
</header>

<section class="banner bg-primary">
    <div class="container">
        <div class="w-full xl:w-5/12 py-20 md:pb-24 md:pt-32">
            <div class="flex flex-wrap gap-x-7 items-center relative">
                <div class="w-fit h-[20px]">
                    <div class="h-full relative">
                        <div class="pulsating-circle top-0"></div>
                    </div>
                </div>
                <p class="font-extrabold text-xl text-white relative">Open now</p>
            </div>

            <h1 class="text-5xl md:text-64 font-merge text-white leading-none pt-4">Your Fast, Local <span class="text-pink">West Melbourne</span> Plumber Experts</h1>

            <div class="w-fit flex flex-wrap gap-3 mt-10 md:mt-20">
                <a href="#form" class="w-fit flex items-center rounded-lg leading-none shadow-md bg-pink text-white font-bold h-[53px] px-7">Book Online</a>
                <a href="tel:<?= $phone_number ?>" class="w-fit flex items-center rounded-lg leading-none shadow-md bg-secondary text-white font-bold h-[53px] px-7">Call <?= $phone_number ?></a>
            </div>
        </div>
    </div>
    <?= renderImg('isolation.png', 'background', 'w-full') ?>
</section>

<section class="features py-28 md:py-44">
    <div class="container">
        <div class="flex flex-wrap justify-center lg:-mx-2 gap-y-10">
            <div class="w-full md:w-1/3 lg:w-1/5 px-10 md:px-2">
                <div class="group text-center flex flex-col items-center relative">
                    <div class="w-[140px] h-[140px] group-hover:bg-white rounded-full group-hover:shadow-lg duration-150 flex justify-center items-center">
                        <svg width="94" height="88" viewBox="0 0 94 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M73.1461 66.6899L57.7666 58.7605C55.4843 57.5712 52.6072 58.1658 51.0193 60.2472L45.562 67.2845C40.4026 64.41 36.2351 61.734 31.2739 56.7781C26.2137 51.7231 23.4353 47.461 20.7563 42.406L27.7019 36.9546C29.7855 35.3688 30.3808 32.4943 29.1903 30.2144L21.2525 14.9503C20.558 13.5626 19.268 12.5714 17.7797 12.1749C16.2913 11.7783 14.7038 12.0758 13.4138 12.8686L3.59073 19.4102C1.2093 20.996 -0.179898 23.7715 0.0187954 26.5465C0.217109 29.1235 0.514909 32.7911 1.2093 35.368C4.08684 46.3708 11.0324 57.7693 20.657 67.3837C30.2816 76.9981 41.6922 83.9363 52.7059 86.8108C55.2856 87.5044 58.9571 87.8019 61.5367 88H62.0328C64.7117 88 67.2918 86.6123 68.7801 84.3328L75.1305 74.4211C75.9244 73.1324 76.2218 71.5466 75.8249 70.0598C75.5268 68.5734 74.5346 67.3838 73.1454 66.6901L73.1461 66.6899Z" fill="#002D85" />
                            <path d="M92.9933 37.8623L73.3391 3.65452C70.4892 -1.21817 63.5121 -1.21817 60.6622 3.65452L41.0081 37.8623C38.1582 42.8343 41.6959 48.9997 47.2975 48.9997L86.6058 49C92.3056 49 95.8432 42.8345 92.9933 37.8626L92.9933 37.8623ZM64.1017 11.5104C64.1017 9.9194 65.3794 8.52714 67.0498 8.52714C68.6221 8.52714 69.9979 9.82004 69.9979 11.5104V27.421C69.9979 29.0119 68.7202 30.4042 67.0498 30.4042C65.4776 30.4042 64.1017 29.1113 64.1017 27.421V11.5104ZM67.0498 42.4366C64.7894 42.4366 62.9226 40.5471 62.9226 38.2602C62.9226 35.9729 64.7898 34.0838 67.0498 34.0838C69.3102 34.0838 71.177 35.9733 71.177 38.2602C71.1773 40.5475 69.3101 42.4366 67.0498 42.4366Z" fill="#2579ED" />
                        </svg>
                    </div>

                    <p class="text-secondary group-hover:text-primary duration-150 font-merge text-2xl md:text-3xl mt-5 md:mt-10 capitalize">24/7 Emergency & General Plumbing</p>
                </div>
            </div>

            <div class="w-full md:w-1/3 lg:w-1/5 px-10 md:px-2">
                <div class="group text-center flex flex-col items-center">
                    <div class="w-[140px] h-[140px] group-hover:bg-white rounded-full group-hover:shadow-lg duration-150 flex justify-center items-center">
                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.5305 14.8432H60.968C62.0467 14.8432 62.9211 13.9689 62.9211 12.8901V8.78847C62.9211 5.66022 60.3853 3.12439 57.2571 3.12439H41.2412C38.113 3.12439 35.5771 5.66022 35.5771 8.78847V12.8901C35.5771 13.9688 36.4515 14.8432 37.5303 14.8432H37.5305Z" fill="#002D85" />
                            <path d="M80.5 46.0933C71.8708 46.0933 64.875 53.0887 64.875 61.7183C64.875 70.3478 71.8704 77.3433 80.5 77.3433C89.1296 77.3433 96.125 70.3478 96.125 61.7183C96.125 53.0887 89.1296 46.0933 80.5 46.0933ZM87.7406 59.1933L79.9281 67.0058C79.5466 67.3869 79.0469 67.5777 78.5469 67.5777C78.0469 67.5777 77.5473 67.3869 77.1658 67.0058L73.2595 63.0995C72.4968 62.3368 72.4968 61.1002 73.2595 60.3372C74.0225 59.5748 75.2588 59.5748 76.0218 60.3372L78.5469 62.8623L84.9783 56.4309C85.7413 55.6686 86.9776 55.6686 87.7406 56.4309C88.5033 57.1936 88.5033 58.4306 87.7406 59.1933Z" fill="#2579ED" />
                            <path d="M29.7189 77.3432C28.6402 77.3432 27.7657 76.4685 27.7657 75.39C27.7657 74.3115 28.6401 73.4369 29.7189 73.4369H64.8848C63.5687 71.6875 62.5393 69.7109 61.8668 67.5775H29.7185C28.6397 67.5775 27.7653 66.7029 27.7653 65.6244C27.7653 64.5458 28.6397 63.6712 29.7185 63.6712H61.066C59.9133 52.1145 69.023 42.187 80.5002 42.187V19.5953C80.5002 14.8213 76.6161 10.937 71.8418 10.937H66.8282V12.8902C66.8282 16.121 64.1996 18.7495 60.9688 18.7495H37.5313C34.3005 18.7495 31.672 16.1209 31.672 12.8902V10.937H26.6583C21.8842 10.937 18 14.8211 18 19.5953V88.2162C18 92.9903 21.8841 96.8745 26.6583 96.8745H71.8417C76.6158 96.8745 80.5 92.9904 80.5 88.2162V81.2494C76.112 81.2494 72.0583 79.7946 68.7933 77.3424C68.6355 77.3434 30.3083 77.3431 29.7192 77.3431L29.7189 77.3432ZM50.0231 44.7915H48.4768C45.2685 44.7915 42.6582 42.1812 42.6582 38.9728C42.6582 36.1685 44.6523 33.8215 47.2968 33.2746V30.4686C47.2968 29.3898 48.1712 28.5154 49.25 28.5154C50.3288 28.5154 51.2032 29.3898 51.2032 30.4686V33.1542H53.8888C54.9672 33.1542 55.8419 34.0285 55.8419 35.1073C55.8419 36.1861 54.9673 37.0605 53.8888 37.0605H48.477C47.4227 37.0605 46.5646 37.9186 46.5646 38.9729C46.5646 40.0273 47.4227 40.8853 48.477 40.8853H50.0233C53.2316 40.8853 55.8419 43.4953 55.8419 46.704C55.8419 49.5083 53.8478 51.8553 51.2033 52.4023V55.2083C51.2033 56.287 50.3289 57.1614 49.2501 57.1614C48.1712 57.1614 47.2969 56.2871 47.2969 55.2083V52.5227H44.6113C43.5326 52.5227 42.6582 51.6483 42.6582 50.5695C42.6582 49.4908 43.5325 48.6163 44.6113 48.6163H50.0231C51.0774 48.6163 51.9355 47.7583 51.9355 46.7039C51.9355 45.6496 51.0774 44.7915 50.0231 44.7915ZM62.9223 87.109H29.7189C28.6402 87.109 27.7657 86.2343 27.7657 85.1558C27.7657 84.0773 28.6401 83.2027 29.7189 83.2027H62.9223C64.0007 83.2027 64.8754 84.0773 64.8754 85.1558C64.8754 86.2343 64.0008 87.109 62.9223 87.109Z" fill="#002D85" />
                        </svg>
                    </div>

                    <p class="text-secondary group-hover:text-primary duration-150 font-merge text-2xl md:text-3xl mt-5 md:mt-10 capitalize">Set prices upon inspection</p>
                </div>
            </div>

            <div class="w-full md:w-1/3 lg:w-1/5 px-10 md:px-2">
                <div class="group text-center flex flex-col items-center">
                    <div class="w-[140px] h-[140px] group-hover:bg-white rounded-full group-hover:shadow-lg duration-150 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M74.6191 61.9141L95.5927 70.3045C96.4434 70.6427 97.0004 71.4662 97.0004 72.3812V94.7622C97.0004 95.5052 96.6311 96.1992 96.0181 96.6152C95.4028 97.0316 94.6215 97.1166 93.9324 96.839L74.6192 89.1154L74.6191 61.9141Z" fill="#2579ED" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M25.3808 61.9141V89.1155L6.0676 96.8391C5.37847 97.1167 4.59715 97.0318 3.9819 96.6153C3.3683 96.1994 2.99902 95.5053 2.99902 94.7623V72.3814C2.99902 71.4662 3.55654 70.6428 4.40724 70.3046L25.3808 61.9141Z" fill="#2579ED" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M70.1428 64.8409C62.5759 74.8518 54.4645 81.8726 54.3906 81.9351C51.8685 84.1175 48.1308 84.1175 45.6087 81.9351C45.5348 81.8724 37.4237 74.8518 29.8564 64.8409V89.1154L49.1697 96.839C49.7022 97.0539 50.2975 97.0539 50.8306 96.839L70.1438 89.1154L70.1428 64.8409Z" fill="#2579ED" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M49.9989 3.00049C66.0568 3.00049 79.0953 16.0377 79.0953 32.0968C79.0953 41.1365 74.6613 50.4846 69.2522 58.4183C61.3471 70.0073 51.4629 78.5504 51.4629 78.5504C50.6238 79.2778 49.3749 79.2778 48.5353 78.5504C48.5353 78.5504 38.6523 70.0077 30.7474 58.4183C25.3383 50.4844 20.9043 41.1365 20.9043 32.0968C20.9043 16.039 33.9415 3.00049 49.9992 3.00049H49.9989ZM49.9989 20.905C43.8219 20.905 38.8086 25.9188 38.8086 32.0958C38.8086 38.2729 43.8219 43.2862 49.9989 43.2862C56.1766 43.2862 61.1898 38.2729 61.1898 32.0958C61.1898 25.9188 56.1766 20.905 49.9989 20.905Z" fill="#002D85" />
                        </svg>
                    </div>

                    <p class="text-secondary group-hover:text-primary duration-150 font-merge text-2xl md:text-3xl mt-5 md:mt-10 capitalize">Local Western Melbourne Team</p>
                </div>
            </div>

            <div class="w-full md:w-1/3 lg:w-1/5 px-10 md:px-2">
                <div class="group text-center flex flex-col items-center">
                    <div class="w-[140px] h-[140px] group-hover:bg-white rounded-full group-hover:shadow-lg duration-150 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                            <g clip-path="url(#clip0_242_2208)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M50.0021 26.97C40.7418 26.97 33.1885 34.5229 33.1885 43.7836C33.1885 53.0443 40.7414 60.5971 50.0021 60.5971C59.2624 60.5971 66.8156 53.0447 66.8156 43.7836C66.8156 34.5233 59.2628 26.97 50.0021 26.97Z" fill="#2579ED" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M68.9208 64.236C66.4833 62.6328 63.5894 61.3357 60.3833 60.4399C57.3715 62.3215 53.8135 63.4095 50.0011 63.4095C46.1881 63.4095 42.6305 62.3216 39.6189 60.4399C36.4128 61.3357 33.5189 62.6328 31.0814 64.236C26.0231 67.5628 22.8942 72.2165 22.8942 77.4097C22.8942 80.1291 22.8218 82.947 22.895 85.6539C22.9248 88.9115 26.1695 91.7113 31.4007 93.6074C36.1911 95.3433 42.7693 96.4172 50.0008 96.4172C57.2319 96.4172 63.8108 95.3433 68.6008 93.6074C73.8321 91.7113 77.0767 88.9115 77.1065 85.6539C77.1797 82.9466 77.1073 80.1291 77.1073 77.4097C77.1069 72.2167 73.9784 67.563 68.9201 64.236H68.9208Z" fill="#2579ED" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M60.4121 27.144C65.9466 30.6143 69.6273 36.7683 69.6273 43.7826C69.6273 45.8854 69.2955 47.9101 68.6833 49.8094C70.3991 50.4461 72.255 50.7944 74.1925 50.7944C82.9399 50.7944 90.0309 43.7033 90.0309 34.9559C90.0309 26.2085 82.9399 19.1174 74.1925 19.1174C68.2864 19.1174 63.1358 22.3508 60.4123 27.1437L60.4121 27.144Z" fill="#002D85" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.623 50.7946C27.6229 50.7946 29.5362 50.4226 31.2979 49.7464C30.6986 47.8656 30.374 45.8622 30.374 43.7827C30.374 36.8263 33.9931 30.7161 39.4512 27.2297C36.7411 22.3894 31.5645 19.1169 25.6227 19.1169C16.8753 19.1169 9.78418 26.208 9.78418 34.9554C9.78418 43.7032 16.8753 50.7939 25.6227 50.7939L25.623 50.7946Z" fill="#002D85" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M29.534 61.8853C31.7876 60.4031 34.2617 59.2327 36.8491 58.3515C34.9885 56.6706 33.4512 54.6383 32.3422 52.3593L32.3056 52.3733C30.1711 53.1931 27.9086 53.6085 25.6224 53.6085C21.9039 53.6085 18.4396 52.5198 15.5299 50.6438C12.6154 51.4864 9.9805 52.6822 7.74981 54.1495C2.95976 57.3001 -0.00292969 61.7105 -0.00292969 66.6344L-0.00252747 74.4028C0.025628 77.4186 2.91557 80.0221 7.63118 81.8172C10.9366 83.0758 15.225 83.9904 20.0553 84.3946C20.0275 82.0662 20.079 79.7381 20.079 77.4101C20.0794 70.7784 24.1892 65.401 29.5335 61.8857L29.534 61.8853Z" fill="#002D85" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M92.2476 54.1482C90.0707 52.7167 87.5094 51.5434 84.6786 50.7048C81.7895 52.5426 78.3611 53.6076 74.6836 53.6076C72.3974 53.6076 70.1353 53.1921 68.0004 52.3724L67.7035 52.2586C66.591 54.5781 65.036 56.6455 63.1484 58.3505C65.7363 59.2322 68.2099 60.4023 70.4636 61.8844C75.8082 65.3994 79.9181 70.7766 79.9181 77.4088C79.9181 79.7368 79.9695 82.0649 79.9418 84.3933C84.7724 83.9895 89.0608 83.0744 92.3659 81.8159C97.0815 80.0208 99.9718 77.4173 99.9996 74.4014L100 66.6331C100 61.7096 97.0373 57.2996 92.2472 54.1482L92.2476 54.1482Z" fill="#002D85" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M41.9066 25.8559L41.9259 25.8901C44.3887 24.7764 47.1221 24.1565 50.0012 24.1565C52.9752 24.1565 55.7948 24.8186 58.3207 26.0031L58.4032 25.8559C60.1641 22.7114 62.754 20.2032 65.8156 18.5473C65.3615 10.2065 58.455 3.58301 50.0008 3.58301C41.6001 3.58301 34.7286 10.1235 34.1963 18.3898C37.3879 20.0417 40.0888 22.6094 41.906 25.8553L41.9066 25.8559Z" fill="#002D85" />
                            </g>
                            <defs>
                                <clipPath id="clip0_242_2208">
                                    <rect width="100" height="100" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <p class="text-secondary group-hover:text-primary duration-150 font-merge text-2xl md:text-3xl mt-5 md:mt-10 capitalize">Family Owned Business</p>
                </div>
            </div>

            <div class="w-full md:w-1/3 lg:w-1/5 px-10 md:px-2">
                <div class="group text-center flex flex-col items-center">
                    <div class="w-[140px] h-[140px] group-hover:bg-white rounded-full group-hover:shadow-lg duration-150 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                            <path d="M44.0864 72.6833C25.6012 58.3466 28.0602 28.093 47.678 16.2657C46.6618 15.1896 45.4287 13.7939 43.7857 14.0255L25.6443 15.3391C26.4702 17.4519 26.8843 19.7054 26.8638 21.9764C28.8953 22.1193 30.7902 23.0577 32.1441 24.5918C33.498 26.1258 34.2026 28.1329 34.1076 30.1839C34.0126 32.2353 33.1252 34.1673 31.6356 35.5673C30.1457 36.9673 28.1721 37.7236 26.1365 37.6748C24.1009 37.6257 22.1648 36.7756 20.7432 35.3058C19.3211 33.8357 18.5262 31.8633 18.528 29.8098C18.3871 27.9017 19.5032 26.4988 19.8648 24.8234C20.6551 21.7563 20.1081 18.4952 18.361 15.8613C17.6778 15.8627 15.8475 16.0792 15.1536 16.0971C14.3528 16.155 13.5997 16.5018 13.0321 17.0742C12.4645 17.6466 12.1206 18.4061 12.0632 19.2136L10.0085 48.1214C9.93958 49.0974 10.2928 50.0559 10.9774 50.7494L55.8639 96.0145C56.4914 96.6455 57.3416 97 58.2276 97C59.1137 97 59.9639 96.6455 60.5914 96.0145C62.3524 94.3341 77.7384 78.6545 79 77.4506C73.3119 79.9876 67.0382 80.8851 60.8747 80.0434C54.7112 79.2018 48.9005 76.6542 44.0858 72.6831L44.0864 72.6833Z" fill="#002D85" />
                            <path d="M21.3509 25.8511C21.209 26.4395 21.3703 27.0637 21.7751 27.4935C22.18 27.9236 22.7688 28.0962 23.3251 27.9477C23.8811 27.7988 24.3222 27.3511 24.4858 26.7692C25.0994 24.3042 25.1648 21.722 24.6769 19.2258C24.1887 16.7297 23.1608 14.3874 21.6735 12.3831C19.6454 9.95622 16.9679 8.24077 13.997 7.46474C11.0261 6.68842 7.90213 6.88824 5.04112 8.03765C4.50615 8.25613 4.11924 8.75693 4.02306 9.35572C3.92684 9.95482 4.13588 10.5629 4.57292 10.9561C5.00997 11.3496 5.61032 11.4702 6.15308 11.2732C17.0058 7.50638 23.6651 17.7173 21.3511 25.8507L21.3509 25.8511Z" fill="#002D85" />
                            <path d="M65.9795 17C38.5508 17.1153 26.7029 52.1805 47.7627 69.461C66.3581 84.9407 95.1266 71.1918 94.9996 46.4984C94.9934 38.677 91.9338 31.1776 86.4932 25.6471C81.0522 20.1168 73.6746 17.0073 65.9795 17ZM60.7704 33.6399C60.7496 35.5172 59.7522 37.2433 58.1492 38.1758C56.546 39.1084 54.5769 39.1084 52.9739 38.1758C51.3707 37.243 50.3735 35.5173 50.3528 33.6395C50.3736 31.7622 51.371 30.0365 52.9739 29.1039C54.5772 28.1711 56.5463 28.1711 58.1492 29.1039C59.7525 30.0365 60.7496 31.7625 60.7704 33.6399ZM55.4425 60.7324C54.686 61.4758 53.5999 61.7585 52.5851 61.4758C51.5703 61.1931 50.7775 60.3873 50.4994 59.3559C50.2213 58.3244 50.4994 57.2201 51.2311 56.4514L75.7865 31.4912C76.5428 30.7465 77.6295 30.4629 78.6452 30.7453C79.6609 31.0276 80.4544 31.8341 80.7322 32.8665C81.01 33.899 80.7309 35.0035 79.9983 35.7722L55.4425 60.7324ZM73.4203 57.0867C73.4414 55.2093 74.4388 53.4843 76.0417 52.5517C77.6447 51.6195 79.6135 51.6195 81.2164 52.5517C82.8193 53.4843 83.8168 55.2097 83.8378 57.0867C83.8168 58.9638 82.8193 60.6892 81.2164 61.6217C79.6135 62.554 77.6447 62.554 76.0417 61.6214C74.4388 60.6892 73.4413 58.9638 73.4203 57.0864V57.0867Z" fill="#2579ED" />
                        </svg>
                    </div>

                    <p class="text-secondary group-hover:text-primary duration-150 font-merge text-2xl md:text-3xl mt-5 md:mt-10 capitalize">Discounts For Western Locals</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="todays-offer" id="todays-offer">
    <div class="container">
        <div class="flex flex-wrap gap-y-4 md:gap-y-7 lg:-mx-3 justify-center">
            <div class="w-full xl:w-1/2 md:px-3">
                <div class="h-full bg-primary rounded-10 flex flex-wrap overflow-clip text-white shadow-lg">
                    <div class="w-full md:w-5/12 grow py-10 px-3 md:p-14">
                        <p class="capitalize font-merge text-xl md:text-2xl leading-none">Save On your hot water</p>
                        <p class="text-4xl md:text-5xl leading-none font-merge py-5">Receive <br /><span class="text-pink">$100 Off</span></p>
                        <p class="text-base md:text-lg md:pt-5">
                            Upgrade your hot water system today and Get $100 off. Experience improved efficiency, lower your energy bills!
                        </p>
                    </div>
                    <div class="w-fit">
                        <?= renderImg('cta1-sm.png', 'lib', 'w-full md:hidden') ?>
                        <?= renderImg('cta1.png', 'lib', 'h-full hidden md:block') ?>
                    </div>
                </div>
            </div>

            <div class="w-full xl:w-1/2 md:px-3">
                <div class="h-full bg-primary rounded-10 flex flex-wrap overflow-clip text-white shadow-lg">
                    <div class="w-full md:w-5/12 grow py-10 px-3 md:p-14">
                        <p class="capitalize font-merge text-xl md:text-2xl leading-none">When Your Book Online</p>
                        <p class="text-4xl md:text-5xl leading-none font-merge py-5">Receive <br /><span class="text-pink">$50 Off</span></p>
                        <p class="text-base md:text-lg md:pt-5">
                            Book any plumbing service online and save $50. Don't wait, schedule your service today and start saving!
                        </p>
                    </div>
                    <div class="w-fit">
                        <?= renderImg('cta2-sm.png', 'lib', 'w-full md:hidden') ?>
                        <?= renderImg('cta2.png', 'lib', 'h-full hidden md:block') ?>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/3 md:px-3">
                <div class="h-full bg-primary rounded-10 overflow-clip text-white shadow-lg">
                    <div class="w-full grow py-10 px-3 md:p-14 text-center">
                        <p class="capitalize font-merge text-xl md:text-2xl leading-none">If You Have A Leak</p>
                        <p class="text-4xl md:text-5xl leading-none font-merge pt-5"><span class="text-pink">Free</span> Inspection</p>
                    </div>
                    <div class="w-full">
                        <?= renderImg('cta3.png', 'lib', 'w-full') ?>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/3 md:px-3">
                <div class="h-full bg-primary rounded-10 overflow-clip text-white shadow-lg">
                    <div class="w-full grow py-10 px-3 md:p-14 text-center">
                        <p class="capitalize font-merge text-xl md:text-2xl leading-none">Upgrade Your Tap</p>
                        <p class="text-4xl md:text-5xl leading-none font-merge pt-5">Receive <span class="text-pink">10% Off</span></p>
                    </div>
                    <div class="w-full">
                        <?= renderImg('cta4.png', 'lib', 'w-full') ?>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-2/3 lg:w-1/3 md:px-3">
                <div class="h-full bg-primary rounded-10 overflow-clip text-white shadow-lg">
                    <div class="w-full grow py-10 px-3 md:p-14 text-center">
                        <p class="capitalize font-merge text-xl md:text-2xl leading-none">Get 10% Off</p>
                        <p class="text-4xl md:text-5xl leading-none font-merge pt-5">Senior <span class="text-pink">Discounts</span></p>
                    </div>
                    <div class="w-full">
                        <?= renderImg('cta5.png', 'lib', 'w-full') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="worked-with pt-28 pb-20 md:pt-48 md:pb-36">
    <div class="container">
        <p class="capitalize text-4xl md:text-5xl lg:text-64 font-merge text-secondary text-center leading-none">We Have <span class="text-primary">Worked With</span></p>
    </div>

    <div class="pt-16 md:pt-28 partnersSlider">
        <?php for ($i = 1; $i < 10; $i++) : ?>
            <div><?= renderImg('partner' . $i . '.png', 'lib') ?></div>
        <?php endfor; ?>
    </div>
</section>

<?= renderImg('isolation-2.png', 'background', 'w-full') ?>
<section class="service py-20 md:py-32 bg-secondary" id="services">
    <div class="container">
        <p class="capitalize text-4xl md:text-5xl lg:text-64 font-merge text-white text-center leading-none">Fast West Melbourne <span class="text-pink">Services</span></p>

        <div class="flex flex-wrap gap-y-6 lg:-mx-3 mt-16 md:mt-24" id="serviceSlider">
            <?php $services = [
                "24/7 Emergency Plumbing",
                'Unblock Drains & Sinks',
                "Hot Water Repairs, Installs & Upgrades",
                "Gas Installation & Repairs",
                "Tap Installation & Repairs",
                "Toilet  Installation & Repairs",
                "Leak<br /> Detection",
                "Roofing &<br /> Guttering"
            ];

            foreach ($services as $key => $service) :
            ?>
                <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 md:px-3">
                    <div class="<?= ($key == 0) ? 'bg-primary' : 'bg-light' ?> rounded-10 overflow-clip h-full shadow-lg">
                        <div class="w-full">
                            <?= renderImg('service' . ($key + 1) . '.jpg', 'lib', 'w-full') ?>
                        </div>
                        <div class="flex flex-col items-center gap-y-10 grow py-10 md:py-14 px-5 md:px-10 text-center">
                            <p class="text-3xl leading-none font-merge <?= ($key == 0) ? 'text-white' : 'text-secondary' ?> pt-5"><?= $service ?></p>
                            <?php if ($key == 0) : ?>
                                <a href="tel:<?= $phone_number ?>" class="w-fit flex items-center rounded-lg leading-none shadow-md bg-pink text-white font-bold h-[53px] px-7">Call Now</a>
                            <?php else : ?>
                                <a href="#form" class="w-fit flex items-center rounded-lg leading-none shadow-md bg-primary text-white font-bold h-[53px] px-7">Book Now</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bg-primary" id="about-us">
    <?= renderImg('isolation-3.png', 'background', 'w-full') ?>

    <div class="container py-24 md:py-40">
        <div class="rounded-10 bg-secondary text-white overflow-clip shadow-lg flex flex-wrap items-end xl:items-center justify-between">
            <div class="w-full md:w-7/12 px-3 xl:px-24 py-10">
                <p class="text-4xl xl:text-5xl font-merge leading-none">Professional Licensed Plumbers in West Melbourne</p>

                <div class="description text-base xl:text-lg py-5 xl:py-14">
                    <p>Plumbing and drain problems never happen at a good time. It can often seem like they only occur at the worst times or just before holidays and special occasions when your home will be full of friends and family.</p>

                    <p>At Western Melbourne Plumber, we understand the inconvenience these issues bring. Our team of skilled professionals is available round the clock, even on holidays, to provide efficient and reliable plumbing services.</p>
                </div>

                <div class="w-fit flex flex-wrap gap-3">
                    <a href="#form" class="w-fit flex items-center rounded-lg leading-none shadow-md bg-pink text-white font-bold h-[53px] px-7">Book Online</a>
                    <a href="tel:<?= $phone_number ?>" class="w-fit flex items-center rounded-lg leading-none shadow-md bg-primary text-white font-bold h-[53px] px-7">Call Us Today</a>
                </div>
            </div>

            <div class="w-full md:w-5/12">
                <?= renderImg('professional-licensed.png', 'lib') ?>
            </div>
        </div>

        <div class="rounded-10 bg-secondary text-white overflow-clip shadow-lg flex flex-wrap items-end xl:items-center justify-between mt-7 md:mt-16">
            <div class="w-full md:w-5/12 order-2 md:order-1">
                <?= renderImg('specialist-plumber.png', 'lib') ?>
            </div>

            <div class="w-full md:w-7/12 px-3 xl:px-24 py-10 order-1 md:order-2">
                <p class="text-4xl xl:text-5xl font-merge leading-none">Local Specialist Plumbers in West Melbourne</p>

                <div class="description text-base xl:text-lg py-5 xl:py-14">
                    <p>Whether you need a toilet repair or Leak repair or installation, or there’s a problem with your hot water, our qualified Western Melbourne Plumber Melbourne will fix your plumbing emergency today so you can breathe a sigh of relief.</p>

                    <p>We offer 24/7 emergency plumbing services so you can be sure your plumbing issues will be taken care of quickly, effectively, and at a reasonable price.</p>
                </div>

                <div class="w-fit flex flex-wrap gap-3">
                    <a href="#form" class="w-fit flex items-center rounded-lg leading-none shadow-md bg-pink text-white font-bold h-[53px] px-7">Book Online</a>
                    <a href="tel:<?= $phone_number ?>" class="w-fit flex items-center rounded-lg leading-none shadow-md bg-primary text-white font-bold h-[53px] px-7">Call Us Today</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?= renderImg('isolation-4.png', 'background', 'w-full') ?>

<div class="container py-24 md:py-32" id="how-it-works">
    <p class="capitalize text-4xl md:text-5xl lg:text-64 font-merge text-secondary text-center leading-none">How <span class="text-primary">it works</span></p>

    <div class="flex flex-wrap justify-center items-center gap-y-16 relative mt-14 md:mt-32 lg:-mx-3">
        <div class="w-full md:w-1/2 xl:w-3/12 md:px-3">
            <div class="bg-white shadow-lg rounded-10 py-10 px-8 flex flex-col items-center justify-between text-center gap-7 relative z-40">
                <svg width="96" height="80" viewBox="0 0 96 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M72.5007 59.2999L57.2007 51.3998C55.0009 50.2999 52.4006 50.8998 50.9006 52.7999L45.3006 59.9997C39.8006 57.0996 35.7006 54.2999 30.9006 49.3997C25.8011 44.2998 23.0009 39.9997 20.2006 34.6997L27.3006 29.1997C29.2006 27.6997 29.8006 25.0998 28.7006 22.8995L20.8006 7.69952C19.4005 4.99969 16.0004 4.19952 13.5004 5.79944L3.80039 12.2994C1.50022 13.7994 0.300387 16.3994 0.400303 19.0996C0.60017 21.8998 0.900303 25.3998 1.60014 27.7996C4.4003 38.6996 11.2001 49.8996 20.8001 59.3996C30.3001 68.8996 41.6001 75.6996 52.4001 78.5996C54.8002 79.1995 58.3002 79.5996 61.1001 79.7994C63.8 79.9993 66.5002 78.6995 68.0002 76.2994L74.3004 66.4994C76.0009 64.0001 75.1009 60.6 72.5009 59.3002L72.5007 59.2999Z" fill="#2579ED" />
                    <path d="M91.5008 0.199707H43.3008C41.1009 0.199707 39.3008 1.99987 39.3008 4.19971V6.79962L67.4008 18.5996L95.5008 6.79962V4.19971C95.5008 1.99987 93.7006 0.199707 91.5008 0.199707Z" fill="#2579ED" />
                    <path d="M67.4008 25.0994C66.5007 25.0994 65.7009 24.8995 64.9008 24.5994L39.3008 13.8994V36.9994C39.3008 39.1992 41.1009 40.9994 43.3008 40.9994H91.6008C93.8006 40.9994 95.6008 39.1992 95.6008 36.9994L95.6005 13.8994L69.9005 24.5994C69.1003 24.8995 68.3005 25.0994 67.4005 25.0994H67.4008Z" fill="#2579ED" />
                </svg>

                <p class="text-3xl font-merge text-primary leading-none capitalize">Call us or use our online form</p>

                <p class="text-secondary text-base md:text-lg">Secure a time for one of our licensed technicians to come to you.</p>

                <div class="w-fit flex flex-wrap gap-3">
                    <a href="#form" class="w-fit flex items-center rounded-lg leading-none shadow-md bg-pink text-white font-bold h-[53px] px-5">Book Online</a>
                    <a href="tel:<?= $phone_number ?>" class="w-fit flex items-center rounded-lg leading-none shadow-md bg-primary text-white font-bold h-[53px] px-5">Call Us</a>
                </div>

                <div class="h-[36px] w-[36px] bg-secondary flex items-center justify-center rounded-full absolute xl:-right-4 top-[96%] xl:top-[45%] rotate-90 xl:rotate-0">
                    <svg width="16" height="22" viewBox="0 0 16 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 3L13 11L3 19" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="w-full xl:w-9/12 lg:px-3">
            <div class="flex flex-wrap lg:-mx-3 gap-y-10">
                <div class="w-full md:w-1/4 md:px-1 lg:px-3">
                    <div class="flex flex-col items-center justify-center gap-y-5 md:gap-y-10 text-center px-1 xl:px-5">
                        <div class="h-[100px] w-[100px] flex items-center justify-center">
                            <svg width="72" height="78" viewBox="0 0 72 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.0152 9.03072V1.12548C16.0152 0.514192 16.5309 0 17.1451 0H19.7057C20.3208 0 20.8374 0.513338 20.8374 1.12548V9.03072C20.8374 9.642 20.3199 10.1545 19.7057 10.1545H17.1451C16.5309 10.1545 16.0152 9.64112 16.0152 9.03072Z" fill="#002D85" />
                                <path d="M52.294 10.1545H54.8556C55.4688 10.1545 55.9846 9.64024 55.9846 9.03072V1.12548C55.9846 0.515083 55.4697 0 54.8556 0H52.294C51.679 0 51.1633 0.513338 51.1633 1.12548V9.03072C51.1633 9.642 51.6799 10.1545 52.294 10.1545Z" fill="#002D85" />
                                <path d="M58.5168 6.33778H60.2477C66.729 6.33778 71.9998 11.5845 71.9998 18.0348L71.9995 20.4413H0.000304222V18.0351C0.000304222 11.5842 5.27197 6.33778 11.7526 6.33778H13.4835V9.03072C13.4835 11.0404 15.1262 12.6745 17.1444 12.6745H19.7051C21.7233 12.6745 23.3678 11.0395 23.3678 9.03072V6.33778H48.6334V9.03072C48.6334 11.0395 50.277 12.6745 52.2952 12.6745H54.8568C56.875 12.6745 58.5168 11.0395 58.5168 9.03072V6.33778Z" fill="#002D85" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.000759125 22.9602H72V66.3026C72 72.753 66.729 78 60.2477 78L11.7523 77.9997C5.27167 77.9997 0 72.7533 0 66.3023L0.000759125 22.9602ZM14 37.5C14 36.1193 15.1193 35 16.5 35H55.5C56.8807 35 58 36.1193 58 37.5C58 38.8807 56.8807 40 55.5 40H16.5C15.1193 40 14 38.8807 14 37.5ZM14 48.5C14 47.1193 15.1193 46 16.5 46H55.5C56.8807 46 58 47.1193 58 48.5C58 49.8807 56.8807 51 55.5 51H16.5C15.1193 51 14 49.8807 14 48.5ZM14 59.5C14 58.1193 15.1193 57 16.5 57H55.5C56.8807 57 58 58.1193 58 59.5C58 60.8807 56.8807 62 55.5 62H16.5C15.1193 62 14 60.8807 14 59.5Z" fill="#002D85" />
                            </svg>
                        </div>

                        <p class="text-2xl lg:text-3xl font-merge text-secondary leading-none capitalize">We Assess The situation</p>

                        <p class="text-secondary text-base lg:text-lg">Our insured plumber will assess the situation with you.</p>
                    </div>
                </div>

                <div class="w-full md:w-1/4 md:px-1 lg:px-3">
                    <div class="flex flex-col items-center justify-center gap-y-5 md:gap-y-10 text-center px-1 xl:px-5">
                        <div class="h-[100px] w-[100px] flex items-center justify-center">
                            <svg width="100" height="60" viewBox="0 0 100 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.6489 45.1255C26.3923 45.1255 27.816 46.6791 27.816 48.3467C27.816 50.0713 26.3921 51.5227 24.6489 51.5227C22.9056 51.5227 21.4365 50.2075 21.4365 48.3467C21.4365 46.554 22.9056 45.1255 24.6489 45.1255Z" fill="#002D85" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M76.6274 45.1255C78.3708 45.1255 79.7945 46.5769 79.7945 48.3014C79.7945 49.9691 78.3707 51.5227 76.6274 51.5227C74.9434 51.5227 73.415 49.9691 73.415 48.3014C73.415 46.5769 74.9434 45.1255 76.6274 45.1255Z" fill="#002D85" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M69.7447 5.78209C69.3071 2.77995 66.6928 0.455078 63.6013 0.455078L6.21448 0.455982C2.8253 0.455982 0 3.25256 0 6.67047V44.3833C0 47.8019 2.8259 50.5626 6.21448 50.5626H13.7077C14.752 55.6757 19.2573 59.5472 24.6453 59.5472C30.0041 59.5472 34.5051 55.6751 35.5471 50.5626H65.6963C66.7378 55.6757 71.2388 59.5472 76.5982 59.5472C81.9856 59.5472 86.4961 55.6751 87.5358 50.5626H95.2064C97.8262 50.5626 100.001 48.4269 100.001 45.7683V28.0833C100.001 25.4248 97.8262 23.2891 95.2064 23.2891H94.1057C93.9265 22.9272 93.7364 22.5401 93.5362 22.1325C92.2949 19.6051 90.6652 16.2868 88.8498 13.2747C87.7438 11.4392 86.5796 9.73042 85.2985 8.37416C84.0175 7.01794 82.5502 5.78209 80.4691 5.78209H69.7447ZM80.4698 10.3272H80.467C80.4677 10.3271 80.4688 10.3272 80.4698 10.3272ZM80.467 10.3272H69.8164V23.2889H89.0277C87.8294 20.8484 86.4496 18.1175 84.9442 15.6182C83.931 13.9371 82.8942 12.4499 81.9967 11.4988C81.2854 10.7457 80.7002 10.4505 80.5213 10.3603C80.4777 10.3383 80.4582 10.3285 80.467 10.3272ZM69.9939 48.289C69.9939 44.5926 72.9719 41.648 76.599 41.648C80.2843 41.7632 83.0614 44.0451 83.2042 48.289C83.2042 52.0411 80.2813 55.0004 76.599 55.0004C72.9725 55.0004 69.9939 52.0417 69.9939 48.289ZM18.0052 48.3242C18.0446 44.6079 20.9668 41.648 24.6462 41.648C28.742 41.8588 31.2513 44.4855 31.2513 48.2888C31.2513 52.041 28.2727 55.0003 24.6462 55.0003C20.9668 55.0003 18.0164 52.0711 18.0052 48.3242Z" fill="#002D85" />
                            </svg>
                        </div>

                        <p class="text-2xl lg:text-3xl font-merge text-secondary leading-none capitalize">We Come To You</p>

                        <p class="text-secondary text-base lg:text-lg">We’ll send our experienced plumbers to your property.</p>
                    </div>
                </div>

                <div class="w-full md:w-1/4 md:px-1 lg:px-3">
                    <div class="flex flex-col items-center justify-center gap-y-5 md:gap-y-10 text-center px-1 xl:px-5">
                        <div class="h-[100px] w-[100px] flex items-center justify-center">
                            <svg width="72" height="92" viewBox="0 0 72 92" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M56.5712 0H15.4288C11.3371 0 7.41242 1.61561 4.51887 4.49099C1.62533 7.36637 0 11.2667 0 15.3336V76.6664C0 80.7329 1.62564 84.6333 4.51887 87.509C7.41211 90.3847 11.3367 92 15.4288 92H56.5712C60.6629 92 64.5876 90.3844 67.4811 87.509C70.3747 84.6336 72 80.7333 72 76.6664V15.3336C72 11.2671 70.3744 7.36668 67.4811 4.49099C64.5879 1.6153 60.6633 0 56.5712 0ZM28.7312 37.7411C29.6151 37.7383 30.4616 38.0953 31.0743 38.7282C32.5091 39.9884 34.3954 40.6189 36.3048 40.4767C39.6649 40.4767 39.6649 38.9626 39.6649 38.465H39.6653C39.7127 37.983 39.5556 37.5035 39.2321 37.1417C38.7701 36.7652 38.1943 36.5551 37.5972 36.5456L34.5746 36.1271L34.5742 36.1267C32.5569 35.9374 30.6532 35.1117 29.1422 33.7704C27.6994 32.2603 26.9409 30.2298 27.0421 28.1499C27.0047 26.3011 27.6005 24.495 28.732 23.0272C29.8634 21.5594 31.4629 20.5172 33.2685 20.0716L33.2648 18.236H33.2644C33.3356 17.4454 33.7008 16.7095 34.2894 16.1728C34.8776 15.6357 35.6462 15.3367 36.4449 15.3335C37.2622 15.3494 38.0432 15.6717 38.6319 16.2351C39.2205 16.7989 39.5732 17.5623 39.6194 18.3734L39.6198 19.8172V19.8176C41.8289 20.1399 43.8823 21.1369 45.4959 22.671C46.1701 23.2708 46.5558 24.1273 46.5565 25.0265C46.5553 25.8774 46.215 26.6928 45.6096 27.2946C45.0045 27.896 44.1837 28.2346 43.3274 28.2354C42.472 28.2405 41.6503 27.9031 41.0481 27.299C39.8364 26.2576 38.2513 25.7497 36.6558 25.8914C34.9061 25.8914 33.861 26.6688 33.861 27.9714V27.971C33.8498 28.3471 33.9936 28.7109 34.2592 28.9788C34.7578 29.3781 35.3629 29.6241 36.0001 29.6868L38.9432 30.1029C40.9159 30.2574 42.7898 31.0261 44.298 32.2994C45.867 33.9026 46.6854 36.0876 46.5529 38.32C46.5513 40.2758 45.8542 42.1682 44.5853 43.6627C43.3165 45.1573 41.5567 46.1584 39.6173 46.489L39.6129 48.0478C39.5819 49.1555 38.968 50.1658 37.9957 50.7076C37.0233 51.2499 35.8357 51.2447 34.8686 50.6937C33.9011 50.1426 33.2965 49.1268 33.276 48.0191L33.2724 46.6699L33.2728 46.6695C30.656 46.3589 28.224 45.1714 26.3774 43.3034C25.772 42.6848 25.4361 41.8543 25.4429 40.9914C25.4501 40.1285 25.7993 39.3031 26.4148 38.6946C27.0303 38.0861 27.8629 37.7435 28.7312 37.7411ZM53.9998 76.666H18.0002C17.0817 76.666 16.2327 76.1788 15.7732 75.3882C15.3139 74.5976 15.3139 73.6233 15.7732 72.8327C16.2328 72.0421 17.0818 71.5549 18.0002 71.5549H53.9998C54.9183 71.5549 55.7673 72.0421 56.2268 72.8327C56.6861 73.6233 56.6861 74.5976 56.2268 75.3882C55.7672 76.1788 54.9182 76.666 53.9998 76.666ZM53.9998 66.4439H18.0002C17.0817 66.4439 16.2327 65.9567 15.7732 65.1661C15.3139 64.3755 15.3139 63.4011 15.7732 62.6106C16.2328 61.8199 17.0818 61.3328 18.0002 61.3328H53.9998C54.9183 61.3328 55.7673 61.8199 56.2268 62.6106C56.6861 63.4012 56.6861 64.3755 56.2268 65.1661C55.7672 65.9567 54.9182 66.4439 53.9998 66.4439Z" fill="#002D85" />
                            </svg>
                        </div>

                        <p class="text-2xl lg:text-3xl font-merge text-secondary leading-none capitalize">Upfront Quote</p>

                        <p class="text-secondary text-base lg:text-lg">We’ll explain our services and provide an upfront quote.</p>
                    </div>
                </div>

                <div class="w-full md:w-1/4 md:px-1 lg:px-3">
                    <div class="flex flex-col items-center justify-center gap-y-5 md:gap-y-10 text-center px-1 xl:px-5">
                        <div class="h-[100px] w-[100px] flex items-center justify-center">
                            <svg width="82" height="74" viewBox="0 0 82 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.7508 30H2.25027C0.989452 30 0 31.0017 0 32.278V68.722C0 69.9984 0.989521 71 2.25027 71H15.7508C17.0116 71 17.9997 69.9983 17.9997 68.722L18 32.278C18.0014 31.0016 17.0116 30 15.751 30H15.7508Z" fill="#002D85" />
                                <path d="M81.9989 34.3288C81.9989 30.5665 79.4536 26.7593 74.5926 26.7593H52.5536C55.7021 21.0436 56.6279 13.0043 54.4391 7.12193C52.8314 2.79551 49.7591 0.27121 45.7831 0.0144932L45.7189 0.0092255C43.1318 -0.151852 40.8919 1.81518 40.6769 4.43686C40.1103 10.2709 37.5915 20.5901 33.9814 24.2538C30.9419 27.3384 28.34 28.6307 24.0273 30.7707C23.4031 31.0807 22.7212 31.4189 22 31.7835C22.0131 31.9418 22.021 32.1001 22.021 32.2626V68.8247C22.5417 69.0057 23.0556 69.1854 23.5605 69.3609C30.6779 71.8508 36.8295 74 46.2318 74H64.0494C68.9116 74 71.4557 70.1912 71.4557 66.4305C71.4557 65.3141 71.2328 64.1948 70.7908 63.1701C72.4102 62.8745 73.8278 62.0841 74.8782 60.8744C76.0701 59.4999 76.7272 57.6726 76.7272 55.7296C76.7272 54.617 76.5042 53.4978 76.0636 52.4758C79.9674 51.7919 82 48.3917 82 45.0298C82 43.0802 81.3154 41.1173 79.9806 39.6801C81.3132 38.2412 81.9992 36.2783 81.9992 34.3287L81.9989 34.3288Z" fill="#002D85" />
                            </svg>
                        </div>

                        <p class="text-2xl lg:text-3xl font-merge text-secondary leading-none capitalize">Completion</p>

                        <p class="text-secondary text-base lg:text-lg">We’ll complete all plumbing services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= renderImg('isolation-5.png', 'background', 'w-full') ?>
<section class="bg-primary py-24 lg:py-40" id="why-us">
    <div class="container">
        <div class="flex flex-wrap justify-center items-center gap-y-10">
            <div class="w-full lg:w-7/12">
                <div class="bg-secondary rounded-10 text-center text-white overflow-clip">
                    <div class="px-3 md:px-20 lg:px-5 xl:px-20 pt-14 md:pt-20 pb-10">
                        <p class="capitalize text-4xl md:text-64 font-merge text-pink text-center leading-none">Why Choose<br /> <span class="text-white">Westerm plumber?</span></p>

                        <p class="text-base md:text-lg py-5 md:py-14">
                            We are licensed, insured and qualified plumbers in West Melbourne, highly experienced in hot water systems repairs & installation, blocked drains, leaking detection and Emergency commercial and residential plumbing services.
                        </p>

                        <div class="flex flex-wrap justify-center gap-3">
                            <a href="#form" class="w-fit flex items-center rounded-lg leading-none shadow-md bg-pink text-white font-bold h-[53px] px-7">Book Online</a>
                            <a href="tel:<?= $phone_number ?>" class="w-fit flex items-center rounded-lg leading-none shadow-md bg-primary text-white font-bold h-[53px] px-7">Call Us Today</a>
                        </div>
                    </div>

                    <?= renderImg('why-us.png', 'lib', 'w-full') ?>
                </div>
            </div>

            <div class="w-full md:w-10/12 lg:w-5/12 flex flex-col gap-y-7 md:gap-y-14 px-3 md:px-16 lg:px-5 xl:px-16">
                <div class="w-full flex flex-wrap items-center text-light">
                    <div class="w-3/12 md:w-2/12">
                        <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M49.527 22.3628L51.7179 23.9698C52.5238 24.561 53 25.5005 53 26.5C53 27.4995 52.5238 28.4392 51.7179 29.0302L49.527 30.6372C48.9514 31.0595 48.5369 31.6656 48.3522 32.3554C48.1674 33.0451 48.2233 33.7772 48.5107 34.4307L49.6045 36.9179C50.0068 37.8327 49.9493 38.8845 49.4496 39.75C48.9499 40.6155 48.0677 41.1912 47.0743 41.3003L44.3735 41.5966C43.6637 41.6745 43.0018 41.9921 42.4969 42.4969C41.9919 43.0018 41.6745 43.6637 41.5964 44.3735L41.3003 47.0743C41.1912 48.0679 40.6155 48.9498 39.75 49.4496C38.8845 49.9493 37.8327 50.0069 36.9177 49.6045L34.4305 48.5107C33.777 48.2233 33.0449 48.1674 32.3552 48.3521C31.6654 48.5369 31.0595 48.9514 30.6372 49.5272L29.0302 51.7179C28.439 52.5238 27.4993 53 26.5 53C25.5005 53 24.5608 52.5238 23.9698 51.7179L22.3626 49.5272C21.9403 48.9514 21.3344 48.5369 20.6446 48.3521C19.9549 48.1674 19.2228 48.2233 18.5694 48.5107L16.0821 49.6045C15.1671 50.0068 14.1155 49.9494 13.25 49.4496C12.3843 48.9499 11.8086 48.0679 11.6995 47.0743L11.4034 44.3735C11.3255 43.6637 11.0079 43.0018 10.5029 42.4969C9.99803 41.9921 9.33612 41.6745 8.62626 41.5966L5.92547 41.3003C4.93212 41.1912 4.04994 40.6155 3.55019 39.75C3.05045 38.8845 2.99294 37.8327 3.39531 36.9179L4.48912 34.4307C4.77666 33.7772 4.83244 33.0451 4.64765 32.3554C4.46289 31.6656 4.04841 31.0595 3.47277 30.6372L1.28186 29.0302C0.475978 28.4392 0 27.4995 0 26.5C0 25.5005 0.475969 24.5608 1.28186 23.9698L3.47277 22.3628C4.04841 21.9405 4.46286 21.3344 4.64765 20.6446C4.83264 19.9549 4.77666 19.2228 4.48912 18.5693L3.39531 16.0821C2.99296 15.1673 3.05062 14.1155 3.55019 13.25C4.04991 12.3845 4.93212 11.8088 5.92547 11.6997L8.62645 11.4034C9.33611 11.3255 9.99802 11.0079 10.5029 10.5032C11.0079 9.99823 11.3255 9.33632 11.4034 8.62646L11.6997 5.92568C11.8086 4.93212 12.3842 4.05017 13.25 3.5504C14.1155 3.05065 15.1673 2.99314 16.0821 3.39551L18.5693 4.48932C19.2228 4.77667 19.9549 4.83265 20.6446 4.64785C21.3344 4.46309 21.9403 4.04861 22.3626 3.47278L23.9698 1.28206C24.5608 0.47617 25.5005 0 26.5 0C27.4993 0 28.439 0.476165 29.0302 1.28206L30.6372 3.47277C31.0595 4.04861 31.6654 4.46305 32.3552 4.64785C33.0449 4.83264 33.777 4.77667 34.4304 4.48931L36.9177 3.3955C37.8327 2.99316 38.8845 3.05062 39.75 3.55039C40.6155 4.05011 41.1912 4.93212 41.3003 5.92567L41.5964 8.62646C41.6743 9.33631 41.9919 9.99822 42.4968 10.5031C43.0018 11.0079 43.6637 11.3255 44.3735 11.4034L47.0743 11.6997C48.0677 11.8088 48.9499 12.3845 49.4496 13.25C49.9493 14.1155 50.0069 15.1673 49.6045 16.0821L48.5107 18.5693C48.2231 19.2228 48.1674 19.9551 48.3521 20.6446C48.5369 21.3344 48.9514 21.9405 49.527 22.3628Z" fill="#F0F6FF" />
                            <path d="M26.5 13C22.9195 13 19.4859 14.4223 16.9541 16.9541C14.4223 19.4859 13 22.9195 13 26.5C13 30.0805 14.4223 33.5141 16.9541 36.0459C19.4859 38.5777 22.9195 40 26.5 40C30.0805 40 33.5141 38.5777 36.0459 36.0459C38.5777 33.5141 40 30.0805 40 26.5C40 24.1303 39.3762 21.8023 38.1914 19.75C37.0065 17.6978 35.3021 15.9934 33.2501 14.8087C31.1979 13.6239 28.8699 13.0001 26.5001 13.0001L26.5 13ZM31.0417 31.0417C30.8606 31.2242 30.6142 31.3269 30.357 31.3269C30.0999 31.3269 29.8535 31.2242 29.6724 31.0417L26.384 27.7438C25.8413 27.2018 25.5362 26.4665 25.5355 25.6995V17.8212C25.5355 17.4767 25.7193 17.1583 26.0176 16.986C26.3159 16.8138 26.6835 16.8138 26.9819 16.986C27.2802 17.1583 27.464 17.4766 27.464 17.8212V25.6995C27.4625 25.9559 27.5632 26.2022 27.7437 26.3842L31.0415 29.6725C31.224 29.8536 31.3268 30.1 31.3268 30.3571C31.3268 30.6143 31.224 30.8607 31.0415 31.0418L31.0417 31.0417Z" fill="#2579ED" />
                        </svg>
                    </div>
                    <div class="w-9/12 md:w-10/12">
                        <p class="text-xl md:text-3xl text-white font-merge">24 Hour Service</p>
                        <p class="text-sm md:text-lg">We travel to all areas of West Melbourne</p>
                    </div>
                </div>

                <div class="w-full flex flex-wrap items-center text-light">
                    <div class="w-3/12 md:w-2/12">
                        <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M49.527 22.3628L51.7179 23.9698C52.5238 24.561 53 25.5005 53 26.5C53 27.4995 52.5238 28.4392 51.7179 29.0302L49.527 30.6372C48.9514 31.0595 48.5369 31.6656 48.3522 32.3554C48.1674 33.0451 48.2233 33.7772 48.5107 34.4307L49.6045 36.9179C50.0068 37.8327 49.9493 38.8845 49.4496 39.75C48.9499 40.6155 48.0677 41.1912 47.0743 41.3003L44.3735 41.5966C43.6637 41.6745 43.0018 41.9921 42.4969 42.4969C41.9919 43.0018 41.6745 43.6637 41.5964 44.3735L41.3003 47.0743C41.1912 48.0679 40.6155 48.9498 39.75 49.4496C38.8845 49.9493 37.8327 50.0069 36.9177 49.6045L34.4305 48.5107C33.777 48.2233 33.0449 48.1674 32.3552 48.3521C31.6654 48.5369 31.0595 48.9514 30.6372 49.5272L29.0302 51.7179C28.439 52.5238 27.4993 53 26.5 53C25.5005 53 24.5608 52.5238 23.9698 51.7179L22.3626 49.5272C21.9403 48.9514 21.3344 48.5369 20.6446 48.3521C19.9549 48.1674 19.2228 48.2233 18.5694 48.5107L16.0821 49.6045C15.1671 50.0068 14.1155 49.9494 13.25 49.4496C12.3843 48.9499 11.8086 48.0679 11.6995 47.0743L11.4034 44.3735C11.3255 43.6637 11.0079 43.0018 10.5029 42.4969C9.99803 41.9921 9.33612 41.6745 8.62626 41.5966L5.92547 41.3003C4.93212 41.1912 4.04994 40.6155 3.55019 39.75C3.05045 38.8845 2.99294 37.8327 3.39531 36.9179L4.48912 34.4307C4.77666 33.7772 4.83244 33.0451 4.64765 32.3554C4.46289 31.6656 4.04841 31.0595 3.47277 30.6372L1.28186 29.0302C0.475978 28.4392 0 27.4995 0 26.5C0 25.5005 0.475969 24.5608 1.28186 23.9698L3.47277 22.3628C4.04841 21.9405 4.46286 21.3344 4.64765 20.6446C4.83264 19.9549 4.77666 19.2228 4.48912 18.5693L3.39531 16.0821C2.99296 15.1673 3.05062 14.1155 3.55019 13.25C4.04991 12.3845 4.93212 11.8088 5.92547 11.6997L8.62645 11.4034C9.33611 11.3255 9.99802 11.0079 10.5029 10.5032C11.0079 9.99823 11.3255 9.33632 11.4034 8.62646L11.6997 5.92568C11.8086 4.93212 12.3842 4.05017 13.25 3.5504C14.1155 3.05065 15.1673 2.99314 16.0821 3.39551L18.5693 4.48932C19.2228 4.77667 19.9549 4.83265 20.6446 4.64785C21.3344 4.46309 21.9403 4.04861 22.3626 3.47278L23.9698 1.28206C24.5608 0.47617 25.5005 0 26.5 0C27.4993 0 28.439 0.476165 29.0302 1.28206L30.6372 3.47277C31.0595 4.04861 31.6654 4.46305 32.3552 4.64785C33.0449 4.83264 33.777 4.77667 34.4304 4.48931L36.9177 3.3955C37.8327 2.99316 38.8845 3.05062 39.75 3.55039C40.6155 4.05011 41.1912 4.93212 41.3003 5.92567L41.5964 8.62646C41.6743 9.33631 41.9919 9.99822 42.4968 10.5031C43.0018 11.0079 43.6637 11.3255 44.3735 11.4034L47.0743 11.6997C48.0677 11.8088 48.9499 12.3845 49.4496 13.25C49.9493 14.1155 50.0069 15.1673 49.6045 16.0821L48.5107 18.5693C48.2231 19.2228 48.1674 19.9551 48.3521 20.6446C48.5369 21.3344 48.9514 21.9405 49.527 22.3628Z" fill="#F0F6FF" />
                            <path d="M18.8048 13.0032C17.7689 12.9623 16.7354 13.3113 15.9511 14.0689L13.9686 15.984C13.1759 16.75 12.9249 17.7517 13.0186 18.7029C13.1123 19.6541 13.4992 20.5885 13.9431 21.4809C18.8518 28.545 26.1328 38.9382 34.1025 39.9722C35.0631 40.086 36.0831 39.8613 36.876 39.0952L38.8585 37.1801C40.4268 35.6649 40.3609 33.1297 38.7731 31.5277L35.843 28.5713C35.2926 28.016 34.4186 27.9059 33.7448 28.307L29.889 30.6036C29.6986 30.7169 29.0758 30.7627 28.901 30.6867C25.8186 29.3491 23.6107 27.2067 22.306 24.043C22.234 23.8684 22.2966 23.2511 22.4164 23.0641L24.825 19.3076C25.2459 18.6512 25.1535 17.7867 24.6031 17.2314L21.6726 14.2752C20.8787 13.4743 19.8407 13.0436 18.8048 13.0028L18.8048 13.0032Z" fill="#2579ED" />
                            <path d="M27.3511 13.7825C27.1773 13.7772 27.0084 13.8402 26.8816 13.9577C26.7549 14.0753 26.6805 14.2378 26.6751 14.4094C26.6697 14.581 26.7334 14.7477 26.8524 14.8728C26.9713 14.9979 27.1357 15.0713 27.3094 15.0769C30.1019 15.165 32.8557 16.3014 34.9207 18.4736C36.8874 20.5424 37.8648 23.1666 37.8779 25.794C37.8787 25.9656 37.9485 26.1299 38.072 26.2507C38.1954 26.3716 38.3624 26.4391 38.5364 26.4383C38.7103 26.4376 38.8767 26.3685 38.9992 26.2464C39.1216 26.1244 39.1899 25.9593 39.1889 25.7876C39.1744 22.8468 38.0745 19.8986 35.8768 17.587C33.5694 15.1598 30.4766 13.881 27.3509 13.7823L27.3511 13.7825Z" fill="#2579ED" />
                            <path d="M27.2427 16.8558C27.0689 16.8504 26.9 16.9134 26.7732 17.031C26.6465 17.1485 26.5721 17.3111 26.5667 17.4827C26.5613 17.6544 26.6252 17.8212 26.7444 17.9464C26.8636 18.0715 27.0283 18.1448 27.2023 18.15C29.2007 18.2111 31.1704 19.0221 32.6486 20.5772C34.0556 22.0572 34.7534 23.9329 34.7621 25.8119C34.7628 25.9835 34.8326 26.1478 34.9561 26.2686C35.0796 26.3895 35.2467 26.457 35.4205 26.4562C35.5943 26.4554 35.7608 26.3866 35.8831 26.2646C36.0055 26.1426 36.0739 25.9778 36.0731 25.8061C36.0631 23.6135 35.2428 21.4141 33.6049 19.6913C31.8839 17.881 29.5748 16.9272 27.2427 16.8559L27.2427 16.8558Z" fill="#2579ED" />
                            <path d="M27.1516 19.9759C26.9778 19.9703 26.8088 20.0332 26.6818 20.1507C26.555 20.2681 26.4806 20.4306 26.475 20.6022C26.4693 20.7738 26.533 20.9406 26.6519 21.0659C26.7709 21.1912 26.9353 21.2647 27.1093 21.2702C28.2963 21.308 29.4641 21.7892 30.3431 22.7138C31.1813 23.5954 31.5946 24.7098 31.5995 25.828C31.6001 25.9998 31.6699 26.1643 31.7934 26.2853C31.9169 26.4062 32.084 26.4738 32.258 26.4731C32.4319 26.4724 32.5986 26.4036 32.721 26.2816C32.8436 26.1597 32.9121 25.9947 32.9113 25.8229C32.9052 24.3908 32.3685 22.9524 31.2993 21.8277C30.1781 20.6482 28.6719 20.0242 27.1518 19.9758L27.1516 19.9759Z" fill="#2579ED" />
                        </svg>
                    </div>
                    <div class="w-9/12 md:w-10/12">
                        <p class="text-xl md:text-3xl text-white font-merge">Quick Response</p>
                        <p class="text-sm md:text-lg">Over 15 Years' Experience</p>
                    </div>
                </div>

                <div class="w-full flex flex-wrap items-center text-light">
                    <div class="w-3/12 md:w-2/12">
                        <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M51.7179 23.9698L49.527 22.3628C48.9514 21.9405 48.5369 21.3344 48.3521 20.6446C48.1674 19.9551 48.2231 19.2228 48.5107 18.5693L49.6045 16.0821C50.0069 15.1673 49.9493 14.1155 49.4496 13.25C48.9499 12.3845 48.0677 11.8088 47.0743 11.6997L44.3735 11.4034C43.6637 11.3255 43.0018 11.0079 42.4968 10.5031C41.9919 9.99822 41.6743 9.33631 41.5964 8.62646L41.3001 5.92567H41.3003C41.1912 4.93212 40.6155 4.05011 39.75 3.55039C38.8845 3.05062 37.8327 2.99316 36.9177 3.3955L34.4304 4.48931C33.777 4.77667 33.0449 4.83264 32.3552 4.64785C31.6654 4.46305 31.0595 4.04861 30.6372 3.47277L29.0302 1.28206C28.439 0.476165 27.4993 0 26.5 0C25.5005 0 24.5608 0.47617 23.9698 1.28206L22.3628 3.47297L22.3626 3.47278C21.9403 4.04861 21.3344 4.46309 20.6446 4.64785C19.9549 4.83265 19.2228 4.77667 18.5693 4.48932L16.0821 3.39551C15.1673 2.99314 14.1155 3.05065 13.25 3.5504C12.3842 4.05017 11.8086 4.93212 11.6997 5.92568L11.4034 8.62646C11.3255 9.33632 11.0079 9.99823 10.5029 10.5032C9.99802 11.0079 9.33611 11.3255 8.62645 11.4034L5.92567 11.6997H5.92547C4.93212 11.8088 4.04991 12.3845 3.55019 13.25C3.05062 14.1155 2.99296 15.1673 3.39531 16.0821L4.48912 18.5692V18.5693C4.77666 19.2228 4.83264 19.9549 4.64765 20.6446C4.46286 21.3344 4.04841 21.9405 3.47277 22.3628L1.28186 23.9698C0.475969 24.5608 0 25.5005 0 26.5C0 27.4995 0.475978 28.4392 1.28186 29.0302L3.47277 30.6372C4.04841 31.0595 4.46289 31.6656 4.64765 32.3554C4.83244 33.0451 4.77666 33.7772 4.48912 34.4307L3.39531 36.9177V36.9179C2.99294 37.8327 3.05045 38.8845 3.55019 39.75C4.04994 40.6155 4.93212 41.1912 5.92547 41.3003L8.62626 41.5966C9.33612 41.6745 9.99803 41.9921 10.5029 42.4969C11.0079 43.0018 11.3255 43.6637 11.4034 44.3735L11.6997 47.0743H11.6995C11.8086 48.0679 12.3843 48.9499 13.25 49.4496C14.1155 49.9494 15.1671 50.0068 16.0821 49.6045L18.5694 48.5107C19.2228 48.2233 19.9549 48.1674 20.6446 48.3521C21.3344 48.5369 21.9403 48.9514 22.3626 49.5272L23.9696 51.7181L23.9698 51.7179C24.5608 52.5238 25.5005 53 26.5 53C27.4993 53 28.439 52.5238 29.0302 51.7179L30.6372 49.527V49.5272C31.0595 48.9514 31.6654 48.5369 32.3552 48.3521C33.0449 48.1674 33.777 48.2233 34.4305 48.5107L36.9177 49.6045C37.8327 50.0069 38.8845 49.9493 39.75 49.4496C40.6155 48.9498 41.1912 48.0679 41.3003 47.0743L41.5966 44.3735H41.5964C41.6745 43.6637 41.9919 43.0018 42.4969 42.4969C43.0018 41.9921 43.6637 41.6745 44.3735 41.5966L47.0743 41.3003C48.0677 41.1912 48.9499 40.6155 49.4496 39.75C49.9493 38.8845 50.0068 37.8327 49.6045 36.9179L48.5107 34.4308V34.4307C48.2233 33.7772 48.1674 33.0451 48.3522 32.3554C48.5369 31.6656 48.9514 31.0595 49.527 30.6372L51.7179 29.0302C52.5238 28.4392 53 27.4995 53 26.5C53 25.5005 52.5238 24.561 51.7179 23.9698ZM38.6785 27.7468C37.4804 37.7432 29.6916 41.5415 26.5003 42.152C23.3089 41.5416 15.52 37.743 14.3221 27.7468L13.3893 19.9641C13.3714 19.816 13.4495 19.6728 13.5837 19.6074L26.3468 13.3814C26.4438 13.334 26.5571 13.334 26.6541 13.3814L39.4173 19.6074C39.5515 19.6728 39.6295 19.816 39.6118 19.9641L38.6785 27.7468ZM24.2846 29.5635L31.7311 22.117C32.0136 21.822 32.3947 21.6412 32.8019 21.6088C33.209 21.5764 33.6139 21.6949 33.9394 21.9416C34.2915 22.2276 34.5059 22.6498 34.5293 23.1029C34.5527 23.5561 34.3828 23.9979 34.0619 24.3188L25.4175 32.9632C25.117 33.2638 24.7094 33.4325 24.2844 33.4325C23.8594 33.4325 23.4517 33.2638 23.1513 32.9632L19.0024 28.8143C18.7074 28.5318 18.5267 28.1509 18.4944 27.7437C18.462 27.3368 18.5805 26.9319 18.8272 26.6066C19.1134 26.2545 19.5355 26.0401 19.9887 26.0167C20.4419 25.9933 20.8837 26.163 21.2046 26.4837L24.2846 29.5635Z" fill="#F0F6FF" />
                        </svg>
                    </div>
                    <div class="w-9/12 md:w-10/12">
                        <p class="text-xl md:text-3xl text-white font-merge">Lifetime Warranty</p>
                        <p class="text-sm md:text-lg">Lifetime Labour Guarantee</p>
                    </div>
                </div>

                <div class="w-full flex flex-wrap items-center text-light">
                    <div class="w-3/12 md:w-2/12">
                        <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M49.527 22.3628L51.7179 23.9698C52.5238 24.561 53 25.5005 53 26.5C53 27.4995 52.5238 28.4392 51.7179 29.0302L49.527 30.6372C48.9514 31.0595 48.5369 31.6656 48.3522 32.3554C48.1674 33.0451 48.2233 33.7772 48.5107 34.4307L49.6045 36.9179C50.0068 37.8327 49.9493 38.8845 49.4496 39.75C48.9499 40.6155 48.0677 41.1912 47.0743 41.3003L44.3735 41.5966C43.6637 41.6745 43.0018 41.9921 42.4969 42.4969C41.9919 43.0018 41.6745 43.6637 41.5964 44.3735L41.3003 47.0743C41.1912 48.0679 40.6155 48.9498 39.75 49.4496C38.8845 49.9493 37.8327 50.0069 36.9177 49.6045L34.4305 48.5107C33.777 48.2233 33.0449 48.1674 32.3552 48.3521C31.6654 48.5369 31.0595 48.9514 30.6372 49.5272L29.0302 51.7179C28.439 52.5238 27.4993 53 26.5 53C25.5005 53 24.5608 52.5238 23.9698 51.7179L22.3626 49.5272C21.9403 48.9514 21.3344 48.5369 20.6446 48.3521C19.9549 48.1674 19.2228 48.2233 18.5694 48.5107L16.0821 49.6045C15.1671 50.0068 14.1155 49.9494 13.25 49.4496C12.3843 48.9499 11.8086 48.0679 11.6995 47.0743L11.4034 44.3735C11.3255 43.6637 11.0079 43.0018 10.5029 42.4969C9.99803 41.9921 9.33612 41.6745 8.62626 41.5966L5.92547 41.3003C4.93212 41.1912 4.04994 40.6155 3.55019 39.75C3.05045 38.8845 2.99294 37.8327 3.39531 36.9179L4.48912 34.4307C4.77666 33.7772 4.83244 33.0451 4.64765 32.3554C4.46289 31.6656 4.04841 31.0595 3.47277 30.6372L1.28186 29.0302C0.475978 28.4392 0 27.4995 0 26.5C0 25.5005 0.475969 24.5608 1.28186 23.9698L3.47277 22.3628C4.04841 21.9405 4.46286 21.3344 4.64765 20.6446C4.83264 19.9549 4.77666 19.2228 4.48912 18.5693L3.39531 16.0821C2.99296 15.1673 3.05062 14.1155 3.55019 13.25C4.04991 12.3845 4.93212 11.8088 5.92547 11.6997L8.62645 11.4034C9.33611 11.3255 9.99802 11.0079 10.5029 10.5032C11.0079 9.99823 11.3255 9.33632 11.4034 8.62646L11.6997 5.92568C11.8086 4.93212 12.3842 4.05017 13.25 3.5504C14.1155 3.05065 15.1673 2.99314 16.0821 3.39551L18.5693 4.48932C19.2228 4.77667 19.9549 4.83265 20.6446 4.64785C21.3344 4.46309 21.9403 4.04861 22.3626 3.47278L23.9698 1.28206C24.5608 0.47617 25.5005 0 26.5 0C27.4993 0 28.439 0.476165 29.0302 1.28206L30.6372 3.47277C31.0595 4.04861 31.6654 4.46305 32.3552 4.64785C33.0449 4.83264 33.777 4.77667 34.4304 4.48931L36.9177 3.3955C37.8327 2.99316 38.8845 3.05062 39.75 3.55039C40.6155 4.05011 41.1912 4.93212 41.3003 5.92567L41.5964 8.62646C41.6743 9.33631 41.9919 9.99822 42.4968 10.5031C43.0018 11.0079 43.6637 11.3255 44.3735 11.4034L47.0743 11.6997C48.0677 11.8088 48.9499 12.3845 49.4496 13.25C49.9493 14.1155 50.0069 15.1673 49.6045 16.0821L48.5107 18.5693C48.2231 19.2228 48.1674 19.9551 48.3521 20.6446C48.5369 21.3344 48.9514 21.9405 49.527 22.3628Z" fill="#F0F6FF" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9279 19.1339C16.9279 18.5486 17.1604 17.9872 17.5743 17.5734C17.9882 17.1595 18.5497 16.927 19.1351 16.9272C19.7204 16.9272 20.2817 17.1597 20.6956 17.5738C21.1093 17.9877 21.3418 18.5491 21.3416 19.1345C21.3416 19.7198 21.1089 20.2811 20.695 20.6948C20.2809 21.1086 19.7195 21.3409 19.134 21.3408C18.5491 21.3401 17.9882 21.1074 17.5747 20.6935C17.1611 20.2798 16.9286 19.7189 16.9279 19.1339ZM25.2683 19.1339C25.2683 17.5071 24.6219 15.947 23.4716 14.7967C22.3212 13.6464 20.7611 13 19.1341 13C17.5072 13 15.9471 13.6464 14.7968 14.7967C13.6464 15.947 13 17.5071 13 19.1339C13 20.7609 13.6464 22.3209 14.7968 23.4712C15.9471 24.6216 17.5072 25.2679 19.1341 25.2679C20.7602 25.2653 22.3188 24.6181 23.4688 23.4684C24.6185 22.3185 25.2657 20.76 25.2683 19.1339ZM33.8658 36.0723C33.2805 36.0723 32.7191 35.8398 32.3055 35.4259C31.8916 35.012 31.6591 34.4507 31.6591 33.8654C31.6591 33.2801 31.8916 32.7188 32.3055 32.3052C32.7191 31.8913 33.2805 31.6588 33.8658 31.6588C34.4511 31.6588 35.0124 31.8913 35.4263 32.3052C35.8402 32.7188 36.0727 33.2802 36.0727 33.8654C36.0721 34.4507 35.8395 35.0116 35.4256 35.4253C35.012 35.8392 34.4511 36.0716 33.8658 36.0723ZM33.8658 27.7321C32.2389 27.7321 30.6786 28.3785 29.5283 29.5288C28.3779 30.6793 27.7317 32.2394 27.7317 33.8664C27.7319 35.4932 28.3781 37.0534 29.5287 38.2035C30.679 39.3538 32.2394 40 33.8664 40C35.4932 39.9998 37.0533 39.3534 38.2037 38.2029C39.354 37.0526 40 35.4923 40 33.8653C39.9983 32.2392 39.3514 30.68 38.2013 29.5301C37.0514 28.3802 35.4921 27.7336 33.8658 27.7321ZM37.222 18.5552C37.7102 18.0575 37.898 17.3382 37.7153 16.6655C37.5327 15.9927 37.0072 15.467 36.3345 15.2846C35.6615 15.102 34.9423 15.2898 34.4447 15.7779L15.7779 34.4446C15.3984 34.8104 15.1816 35.3134 15.1766 35.8406C15.1717 36.3676 15.3789 36.8748 15.7516 37.2476C16.1244 37.6203 16.6314 37.8277 17.1584 37.8228C17.6856 37.818 18.1887 37.6015 18.5544 37.2219L37.222 18.5552Z" fill="#2579ED" />
                        </svg>
                    </div>
                    <div class="w-9/12 md:w-10/12">
                        <p class="text-xl md:text-3xl text-white font-merge">Local Discounts</p>
                        <p class="text-sm md:text-lg">10% Off Senior Discounts</p>
                    </div>
                </div>

                <div class="w-full flex flex-wrap items-center text-light">
                    <div class="w-3/12 md:w-2/12">
                        <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M49.527 22.3628L51.7179 23.9698C52.5238 24.561 53 25.5005 53 26.5C53 27.4995 52.5238 28.4392 51.7179 29.0302L49.527 30.6372C48.9514 31.0595 48.5369 31.6656 48.3522 32.3554C48.1674 33.0451 48.2233 33.7772 48.5107 34.4307L49.6045 36.9179C50.0068 37.8327 49.9493 38.8845 49.4496 39.75C48.9499 40.6155 48.0677 41.1912 47.0743 41.3003L44.3735 41.5966C43.6637 41.6745 43.0018 41.9921 42.4969 42.4969C41.9919 43.0018 41.6745 43.6637 41.5964 44.3735L41.3003 47.0743C41.1912 48.0679 40.6155 48.9498 39.75 49.4496C38.8845 49.9493 37.8327 50.0069 36.9177 49.6045L34.4305 48.5107C33.777 48.2233 33.0449 48.1674 32.3552 48.3521C31.6654 48.5369 31.0595 48.9514 30.6372 49.5272L29.0302 51.7179C28.439 52.5238 27.4993 53 26.5 53C25.5005 53 24.5608 52.5238 23.9698 51.7179L22.3626 49.5272C21.9403 48.9514 21.3344 48.5369 20.6446 48.3521C19.9549 48.1674 19.2228 48.2233 18.5694 48.5107L16.0821 49.6045C15.1671 50.0068 14.1155 49.9494 13.25 49.4496C12.3843 48.9499 11.8086 48.0679 11.6995 47.0743L11.4034 44.3735C11.3255 43.6637 11.0079 43.0018 10.5029 42.4969C9.99803 41.9921 9.33612 41.6745 8.62626 41.5966L5.92547 41.3003C4.93212 41.1912 4.04994 40.6155 3.55019 39.75C3.05045 38.8845 2.99294 37.8327 3.39531 36.9179L4.48912 34.4307C4.77666 33.7772 4.83244 33.0451 4.64765 32.3554C4.46289 31.6656 4.04841 31.0595 3.47277 30.6372L1.28186 29.0302C0.475978 28.4392 0 27.4995 0 26.5C0 25.5005 0.475969 24.5608 1.28186 23.9698L3.47277 22.3628C4.04841 21.9405 4.46286 21.3344 4.64765 20.6446C4.83264 19.9549 4.77666 19.2228 4.48912 18.5693L3.39531 16.0821C2.99296 15.1673 3.05062 14.1155 3.55019 13.25C4.04991 12.3845 4.93212 11.8088 5.92547 11.6997L8.62645 11.4034C9.33611 11.3255 9.99802 11.0079 10.5029 10.5032C11.0079 9.99823 11.3255 9.33632 11.4034 8.62646L11.6997 5.92568C11.8086 4.93212 12.3842 4.05017 13.25 3.5504C14.1155 3.05065 15.1673 2.99314 16.0821 3.39551L18.5693 4.48932C19.2228 4.77667 19.9549 4.83265 20.6446 4.64785C21.3344 4.46309 21.9403 4.04861 22.3626 3.47278L23.9698 1.28206C24.5608 0.47617 25.5005 0 26.5 0C27.4993 0 28.439 0.476165 29.0302 1.28206L30.6372 3.47277C31.0595 4.04861 31.6654 4.46305 32.3552 4.64785C33.0449 4.83264 33.777 4.77667 34.4304 4.48931L36.9177 3.3955C37.8327 2.99316 38.8845 3.05062 39.75 3.55039C40.6155 4.05011 41.1912 4.93212 41.3003 5.92567L41.5964 8.62646C41.6743 9.33631 41.9919 9.99822 42.4968 10.5031C43.0018 11.0079 43.6637 11.3255 44.3735 11.4034L47.0743 11.6997C48.0677 11.8088 48.9499 12.3845 49.4496 13.25C49.9493 14.1155 50.0069 15.1673 49.6045 16.0821L48.5107 18.5693C48.2231 19.2228 48.1674 19.9551 48.3521 20.6446C48.5369 21.3344 48.9514 21.9405 49.527 22.3628Z" fill="#F0F6FF" />
                            <path d="M26.1993 19.0514C24.1885 18.5469 22.0602 19.1358 20.5958 20.6016C20.3845 20.8206 20.3909 21.1691 20.61 21.38C20.8293 21.591 21.1782 21.5846 21.3895 21.3657C22.5791 20.1939 24.2914 19.7208 25.9148 20.1154C26.209 20.1938 26.5113 20.0192 26.5898 19.7253C26.6684 19.4314 26.4934 19.1295 26.1991 19.0511L26.1993 19.0514Z" fill="#2579ED" />
                            <path d="M39.1965 35.2692C38.0827 34.18 34.7869 30.8652 34.7869 30.8652C36.054 28.7949 36.6478 26.3834 36.4865 23.9622C36.3253 21.5412 35.4171 19.2294 33.8866 17.3449C32.356 15.4605 30.2786 14.0959 27.9401 13.4387C25.6014 12.7816 23.1161 12.8644 20.8267 13.6754C18.5372 14.4865 16.555 15.9861 15.1534 17.9682C13.7518 19.9501 12.9996 22.3169 13 24.7436C13.0041 27.857 14.2443 30.8418 16.4487 33.0434C18.653 35.245 21.6414 36.4835 24.7591 36.4876C26.9469 36.491 29.0915 35.8794 30.9474 34.7224C30.9474 34.7224 34.168 38.0382 35.2246 39.1592C35.7404 39.6886 36.4461 39.9912 37.1856 39.9998C37.9251 40.0085 38.6379 39.7227 39.1659 39.2056C39.694 38.6884 39.9941 37.9824 39.9999 37.2437C40.0057 36.5051 39.7168 35.7945 39.1969 35.2691L39.1965 35.2692ZM24.7588 32.0837C22.8097 32.0837 20.9404 31.3104 19.5622 29.9338C18.1839 28.5573 17.4096 26.6904 17.4096 24.7438C17.4096 22.7973 18.1839 20.9303 19.5622 19.5538C20.9405 18.1773 22.8098 17.404 24.7588 17.404C26.7079 17.404 28.5773 18.1773 29.9555 19.5538C31.3338 20.9304 32.1081 22.7973 32.1081 24.7438C32.1061 26.6898 31.3312 28.5557 29.9533 29.9319C28.5755 31.3081 26.7072 32.0819 24.7586 32.0839L24.7588 32.0837Z" fill="#2579ED" />
                        </svg>
                    </div>
                    <div class="w-9/12 md:w-10/12">
                        <p class="text-xl md:text-3xl text-white font-merge">Free Inspections</p>
                        <p class="text-sm md:text-lg">Reliable, Professional & Perfectionist Plumbers</p>
                    </div>
                </div>

                <div class="w-full flex flex-wrap items-center text-light">
                    <div class="w-3/12 md:w-2/12">
                        <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M49.527 22.3628L51.7179 23.9698C52.5238 24.561 53 25.5005 53 26.5C53 27.4995 52.5238 28.4392 51.7179 29.0302L49.527 30.6372C48.9514 31.0595 48.5369 31.6656 48.3522 32.3554C48.1674 33.0451 48.2233 33.7772 48.5107 34.4307L49.6045 36.9179C50.0068 37.8327 49.9493 38.8845 49.4496 39.75C48.9499 40.6155 48.0677 41.1912 47.0743 41.3003L44.3735 41.5966C43.6637 41.6745 43.0018 41.9921 42.4969 42.4969C41.9919 43.0018 41.6745 43.6637 41.5964 44.3735L41.3003 47.0743C41.1912 48.0679 40.6155 48.9498 39.75 49.4496C38.8845 49.9493 37.8327 50.0069 36.9177 49.6045L34.4305 48.5107C33.777 48.2233 33.0449 48.1674 32.3552 48.3521C31.6654 48.5369 31.0595 48.9514 30.6372 49.5272L29.0302 51.7179C28.439 52.5238 27.4993 53 26.5 53C25.5005 53 24.5608 52.5238 23.9698 51.7179L22.3626 49.5272C21.9403 48.9514 21.3344 48.5369 20.6446 48.3521C19.9549 48.1674 19.2228 48.2233 18.5694 48.5107L16.0821 49.6045C15.1671 50.0068 14.1155 49.9494 13.25 49.4496C12.3843 48.9499 11.8086 48.0679 11.6995 47.0743L11.4034 44.3735C11.3255 43.6637 11.0079 43.0018 10.5029 42.4969C9.99803 41.9921 9.33612 41.6745 8.62626 41.5966L5.92547 41.3003C4.93212 41.1912 4.04994 40.6155 3.55019 39.75C3.05045 38.8845 2.99294 37.8327 3.39531 36.9179L4.48912 34.4307C4.77666 33.7772 4.83244 33.0451 4.64765 32.3554C4.46289 31.6656 4.04841 31.0595 3.47277 30.6372L1.28186 29.0302C0.475978 28.4392 0 27.4995 0 26.5C0 25.5005 0.475969 24.5608 1.28186 23.9698L3.47277 22.3628C4.04841 21.9405 4.46286 21.3344 4.64765 20.6446C4.83264 19.9549 4.77666 19.2228 4.48912 18.5693L3.39531 16.0821C2.99296 15.1673 3.05062 14.1155 3.55019 13.25C4.04991 12.3845 4.93212 11.8088 5.92547 11.6997L8.62645 11.4034C9.33611 11.3255 9.99802 11.0079 10.5029 10.5032C11.0079 9.99823 11.3255 9.33632 11.4034 8.62646L11.6997 5.92568C11.8086 4.93212 12.3842 4.05017 13.25 3.5504C14.1155 3.05065 15.1673 2.99314 16.0821 3.39551L18.5693 4.48932C19.2228 4.77667 19.9549 4.83265 20.6446 4.64785C21.3344 4.46309 21.9403 4.04861 22.3626 3.47278L23.9698 1.28206C24.5608 0.47617 25.5005 0 26.5 0C27.4993 0 28.439 0.476165 29.0302 1.28206L30.6372 3.47277C31.0595 4.04861 31.6654 4.46305 32.3552 4.64785C33.0449 4.83264 33.777 4.77667 34.4304 4.48931L36.9177 3.3955C37.8327 2.99316 38.8845 3.05062 39.75 3.55039C40.6155 4.05011 41.1912 4.93212 41.3003 5.92567L41.5964 8.62646C41.6743 9.33631 41.9919 9.99822 42.4968 10.5031C43.0018 11.0079 43.6637 11.3255 44.3735 11.4034L47.0743 11.6997C48.0677 11.8088 48.9499 12.3845 49.4496 13.25C49.9493 14.1155 50.0069 15.1673 49.6045 16.0821L48.5107 18.5693C48.2231 19.2228 48.1674 19.9551 48.3521 20.6446C48.5369 21.3344 48.9514 21.9405 49.527 22.3628Z" fill="#F0F6FF" />
                            <path d="M27.0874 13.0001C29.3378 13.0001 31.2181 14.5978 31.6841 16.7317C31.7568 17.064 31.7965 17.41 31.7965 17.7648C31.7965 18.6333 31.5659 19.4459 31.1649 20.1477H23.01C22.7398 19.6762 22.5479 19.1539 22.4511 18.5971C22.4036 18.3265 22.3784 18.0492 22.3784 17.7649C22.3784 15.133 24.4864 13 27.0875 13L27.0874 13.0001ZM35.7207 15.382V21.0701C36.5994 21.9004 37.324 22.858 37.8549 23.9078L42 25.7055V30.4704L37.8549 32.268C37.0344 33.8913 35.7508 35.2939 34.1515 36.3476V40H30.2272V38.0396C29.2275 38.2817 28.1754 38.411 27.0875 38.411C25.9996 38.411 24.9476 38.2817 23.9478 38.0396V40H20.0235V36.3476C17.5038 34.6881 15.7698 32.163 15.3919 29.2754C15.3658 29.2754 15.3396 29.2773 15.3144 29.2773C14.2091 29.2773 13.1038 28.852 12.262 28.0001C10.5793 26.2975 10.5793 23.5264 12.262 21.8229L13.9272 23.5078C13.1619 24.2822 13.1619 25.5418 13.9272 26.3152C14.3303 26.722 14.865 26.915 15.3938 26.8935C15.8317 23.5579 18.083 20.7074 21.2615 19.1166C21.4359 19.9517 21.7914 20.7438 22.3446 21.4162H31.8547C32.4204 20.6242 32.8185 19.7038 32.9735 18.7372C33.1595 17.8344 33.0888 16.9189 32.8224 16.0603C34.3075 15.382 35.7198 15.381 35.7198 15.381L35.7207 15.382ZM33.7581 24.1177C33.7165 24.1177 33.6758 24.1196 33.6351 24.1245H33.64C33.6002 24.1284 33.5615 24.1343 33.5237 24.1422C33.486 24.1501 33.4472 24.1599 33.4094 24.1716C33.2961 24.2069 33.1904 24.2588 33.0945 24.3255C33.0838 24.3334 33.0762 24.3392 33.0693 24.3451L33.0722 24.3432C33.049 24.3598 33.0267 24.3764 33.0044 24.3951C32.9909 24.4069 32.9792 24.4177 32.9676 24.4294L32.9686 24.4284C32.9522 24.4441 32.9347 24.4588 32.9192 24.4745C32.9095 24.4853 32.8988 24.496 32.8891 24.5077L32.8881 24.5088C32.8725 24.5254 32.8571 24.5421 32.8435 24.5607C32.8357 24.5705 32.826 24.5842 32.8163 24.597L32.8144 24.6009C32.8009 24.6195 32.7873 24.6381 32.7747 24.6577C32.7698 24.6646 32.7631 24.6763 32.7563 24.6882L32.7534 24.6941C32.7407 24.7156 32.7272 24.7372 32.7156 24.7597C32.7127 24.7646 32.7069 24.7774 32.7011 24.7892L32.6982 24.796C32.6875 24.8186 32.6769 24.8411 32.6672 24.8646C32.6643 24.8695 32.6594 24.8832 32.6546 24.897L32.6516 24.9048C32.643 24.9283 32.6352 24.9519 32.6284 24.9764C32.6265 24.9823 32.6226 24.996 32.6198 25.0107L32.6178 25.0186C32.612 25.0421 32.6062 25.0657 32.6023 25.0902C32.6004 25.101 32.5975 25.1185 32.5955 25.1362L32.5945 25.1421C32.5916 25.1628 32.5887 25.1833 32.5868 25.2048C32.5838 25.2353 32.5819 25.2715 32.5819 25.3078V25.3088C32.5819 25.3509 32.5838 25.3931 32.5887 25.4343V25.4294C32.5925 25.4686 32.5984 25.5078 32.6061 25.546C32.6293 25.6646 32.671 25.7773 32.7272 25.8803C32.7456 25.9135 32.765 25.9469 32.7864 25.9783C32.798 25.9949 32.8087 26.0087 32.8184 26.0214L32.8164 26.0184C32.829 26.0361 32.8417 26.0537 32.8552 26.0704C32.8678 26.0841 32.8784 26.0968 32.8901 26.1096V26.1086C32.9046 26.1243 32.9192 26.1409 32.9337 26.1566C32.9453 26.1674 32.9569 26.1781 32.9686 26.1889L32.9696 26.1899C32.9861 26.2057 33.0025 26.2204 33.02 26.2351C33.0286 26.2419 33.0404 26.2517 33.0529 26.2606L33.0558 26.2625C33.0742 26.2762 33.0935 26.2909 33.1129 26.3037C33.1207 26.3096 33.1342 26.3174 33.1478 26.3252L33.1537 26.3282C33.173 26.3399 33.1934 26.3517 33.2137 26.3635C33.2205 26.3674 33.2331 26.3733 33.2466 26.3802L33.2534 26.3831C33.2757 26.394 33.298 26.4047 33.3212 26.4136C33.325 26.4155 33.3367 26.4204 33.3492 26.4244L33.3579 26.4273C33.3821 26.4361 33.4074 26.445 33.4325 26.4518C33.4383 26.4538 33.4519 26.4578 33.4654 26.4606L33.4731 26.4626C33.4964 26.4685 33.5187 26.4743 33.542 26.4783C33.5527 26.4802 33.57 26.4832 33.5885 26.4862L33.5943 26.4872C33.6156 26.4901 33.636 26.4931 33.6573 26.495C33.6874 26.498 33.7222 26.4999 33.7571 26.4999H33.7581C33.7998 26.4999 33.8405 26.498 33.8802 26.494H33.8754C33.9151 26.4901 33.9539 26.4842 33.9916 26.4764C34.1089 26.4529 34.2203 26.4107 34.322 26.3538C34.3559 26.3352 34.3888 26.3146 34.4208 26.2921C34.4305 26.2852 34.4372 26.2803 34.4431 26.2754L34.4402 26.2773C34.4644 26.2597 34.4886 26.242 34.5118 26.2224C34.5234 26.2116 34.5341 26.2028 34.5438 26.193L34.5428 26.194C34.5612 26.1774 34.5796 26.1607 34.5961 26.144C34.6058 26.1332 34.6165 26.1214 34.627 26.1097L34.6281 26.1087C34.6426 26.092 34.6581 26.0754 34.6727 26.0577C34.6813 26.0469 34.691 26.0342 34.7007 26.0204L34.7026 26.0166C34.7162 25.9989 34.7288 25.9803 34.7414 25.9616C34.7462 25.9538 34.754 25.942 34.7608 25.9293L34.7637 25.9233C34.7763 25.9018 34.7889 25.8803 34.8005 25.8586C34.8034 25.8537 34.8092 25.8409 34.815 25.8292L34.818 25.8224C34.8287 25.7989 34.8393 25.7763 34.8489 25.7518C34.8509 25.7469 34.8557 25.7341 34.8606 25.7214L34.8635 25.7135C34.8722 25.69 34.8799 25.6655 34.8877 25.641C34.8896 25.6351 34.8936 25.6214 34.8964 25.6067L34.8983 25.5989C34.9041 25.5754 34.9099 25.5518 34.9138 25.5273C34.9158 25.5164 34.9187 25.4989 34.9206 25.4812L34.9216 25.4753C34.9245 25.4547 34.9275 25.4342 34.9294 25.4126C34.9323 25.3822 34.9342 25.3459 34.9342 25.3097V25.3087C34.9342 25.2665 34.9323 25.2243 34.9275 25.1832V25.1881C34.9236 25.1489 34.9178 25.1097 34.91 25.0715C34.8868 24.9528 34.8451 24.8401 34.7899 24.7372C34.7851 24.7284 34.7832 24.7254 34.7812 24.7225L34.7842 24.7274C34.7677 24.6969 34.7493 24.6666 34.7299 24.6381C34.7202 24.6245 34.7124 24.6147 34.7046 24.6038L34.7066 24.6068C34.691 24.5862 34.6765 24.5646 34.66 24.545C34.6493 24.5323 34.6388 24.5215 34.6291 24.5097V24.5107C34.6135 24.493 34.599 24.4764 34.5825 24.4598C34.5709 24.448 34.5583 24.4372 34.5457 24.4254L34.5447 24.4244C34.5292 24.4097 34.5137 24.396 34.4973 24.3823C34.4866 24.3735 34.4741 24.3637 34.4604 24.3539L34.4566 24.3519C34.4392 24.3383 34.4208 24.3255 34.4023 24.3127C34.3946 24.3078 34.3829 24.3 34.3703 24.2921L34.3645 24.2891C34.3432 24.2764 34.3228 24.2636 34.3005 24.2519C34.2946 24.2489 34.283 24.2431 34.2704 24.2361L34.2637 24.2332C34.2414 24.2224 34.2191 24.2116 34.1969 24.2028C34.191 24.1998 34.1765 24.1949 34.163 24.19L34.1543 24.187C34.132 24.1792 34.1097 24.1713 34.0865 24.1645C34.0806 24.1625 34.0652 24.1585 34.0507 24.1547L34.0429 24.1527C34.0197 24.1468 33.9964 24.141 33.9732 24.137C33.9635 24.1351 33.947 24.1321 33.9296 24.1302L33.9237 24.1291C33.9024 24.1262 33.8801 24.1232 33.8578 24.1213C33.8277 24.1183 33.7929 24.1164 33.758 24.1164L33.7581 24.1177Z" fill="#2579ED" />
                        </svg>
                    </div>
                    <div class="w-9/12 md:w-10/12">
                        <p class="text-xl md:text-3xl text-white font-merge">Interest Free Option</p>
                        <p class="text-sm md:text-lg">$0 Deposit**</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= renderImg('isolation-6.png', 'background', 'w-full') ?>

<section class="container py-24 md:py-32">
    <p class="capitalize text-4xl md:text-5xl lg:text-64 font-merge text-secondary text-center leading-none"><span class="text-primary">Community</span> Connection</p>

    <div class="flex flex-wrap justify-center md:justify-between items-center py-14 xl:py-28 gap-y-4">
        <div class="w-1/3 md:w-1/5 xl:w-fit px-3">
            <?= renderImg('connection-1.png', 'lib') ?>
        </div>

        <div class="w-1/3 md:w-1/5 xl:w-fit px-3">
            <?= renderImg('connection-2.png', 'lib') ?>
        </div>

        <div class="w-1/3 md:w-1/5 xl:w-fit px-3">
            <?= renderImg('connection-3.png', 'lib') ?>
        </div>

        <div class="w-1/3 md:w-1/5 xl:w-fit px-3">
            <?= renderImg('connection-4.png', 'lib') ?>
        </div>

        <div class="w-1/3 md:w-1/5 xl:w-fit px-3">
            <?= renderImg('connection-5.png', 'lib') ?>
        </div>
    </div>

    <div class="flex flex-wrap justify-center lg:-mx-3 gap-y-4">
        <div class="w-full md:w-1/2 lg:w-1/3 md:px-1.5 xl:px-3">
            <div class="h-full bg-white py-10 px-5 xl:p-14 shadow-lg rounded-10">
                <div class="flex flex-wrap justify-between items-center">
                    <div class="w-fit flex flex-wrap items-center gap-x-4">
                        <div class="w-[44px] h-[44px] bg-primary flex justify-center items-center text-white font-merge text-3xl uppercase rounded-full">j</div>
                        <p class="text-primary text-2xl xl:text-3xl font-merge leading-none">John</p>
                    </div>

                    <div class="w-fit">
                        <svg width="140" height="24" viewBox="0 0 140 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 0L15.8088 6.75757L23.4127 8.2918L18.1628 14.0024L19.0534 21.7082L12 18.48L4.94658 21.7082L5.83715 14.0024L0.587322 8.2918L8.19115 6.75757L12 0Z" fill="#FF69D5" />
                            <path d="M41 0L44.8088 6.75757L52.4127 8.2918L47.1628 14.0024L48.0534 21.7082L41 18.48L33.9466 21.7082L34.8372 14.0024L29.5873 8.2918L37.1912 6.75757L41 0Z" fill="#FF69D5" />
                            <path d="M70 0L73.8088 6.75757L81.4127 8.2918L76.1628 14.0024L77.0534 21.7082L70 18.48L62.9466 21.7082L63.8372 14.0024L58.5873 8.2918L66.1912 6.75757L70 0Z" fill="#FF69D5" />
                            <path d="M99 0L102.809 6.75757L110.413 8.2918L105.163 14.0024L106.053 21.7082L99 18.48L91.9466 21.7082L92.8372 14.0024L87.5873 8.2918L95.1912 6.75757L99 0Z" fill="#FF69D5" />
                            <path d="M128 0L131.809 6.75757L139.413 8.2918L134.163 14.0024L135.053 21.7082L128 18.48L120.947 21.7082L121.837 14.0024L116.587 8.2918L124.191 6.75757L128 0Z" fill="#FF69D5" />
                        </svg>
                    </div>
                </div>

                <p class="text-base xl:text-lg text-secondary mt-10">
                    “2 years ago I have multiple problems at my home and lucky I got connected with Ahmed’s team. They made a very good and perfect fix that still I am enjoying the fix with joy and <b>without any fear of happening again.</b> Very expert team members. Thank you, Ahmed. You saved my life, You are best.”
                </p>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/3 md:px-1.5 xl:px-3">
            <div class="h-full bg-white py-10 px-5 xl:p-14 shadow-lg rounded-10">
                <div class="flex flex-wrap justify-between items-center">
                    <div class="w-fit flex flex-wrap items-center gap-x-4">
                        <div class="w-[44px] h-[44px] bg-primary flex justify-center items-center text-white font-merge text-3xl uppercase rounded-full">j</div>
                        <p class="text-primary text-2xl xl:text-3xl font-merge leading-none">Julia</p>
                    </div>

                    <div class="w-fit">
                        <svg width="140" height="24" viewBox="0 0 140 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 0L15.8088 6.75757L23.4127 8.2918L18.1628 14.0024L19.0534 21.7082L12 18.48L4.94658 21.7082L5.83715 14.0024L0.587322 8.2918L8.19115 6.75757L12 0Z" fill="#FF69D5" />
                            <path d="M41 0L44.8088 6.75757L52.4127 8.2918L47.1628 14.0024L48.0534 21.7082L41 18.48L33.9466 21.7082L34.8372 14.0024L29.5873 8.2918L37.1912 6.75757L41 0Z" fill="#FF69D5" />
                            <path d="M70 0L73.8088 6.75757L81.4127 8.2918L76.1628 14.0024L77.0534 21.7082L70 18.48L62.9466 21.7082L63.8372 14.0024L58.5873 8.2918L66.1912 6.75757L70 0Z" fill="#FF69D5" />
                            <path d="M99 0L102.809 6.75757L110.413 8.2918L105.163 14.0024L106.053 21.7082L99 18.48L91.9466 21.7082L92.8372 14.0024L87.5873 8.2918L95.1912 6.75757L99 0Z" fill="#FF69D5" />
                            <path d="M128 0L131.809 6.75757L139.413 8.2918L134.163 14.0024L135.053 21.7082L128 18.48L120.947 21.7082L121.837 14.0024L116.587 8.2918L124.191 6.75757L128 0Z" fill="#FF69D5" />
                        </svg>
                    </div>
                </div>

                <p class="text-base xl:text-lg text-secondary mt-10">
                    “I was scared by plumbing issues over a midnight and I started to look out for the repair, then in the <b>early morning at 5am</b> I found the On Call Plumber service number and I dialled. Result’s in outcome is too good that I have added number in my speed dial for all my other colleague. Quick solver.”
                </p>
            </div>

        </div>

        <div class="w-full md:w-1/2 lg:w-1/3 md:px-1.5 xl:px-3">
            <div class="h-full bg-white py-10 px-5 xl:p-14 shadow-lg rounded-10">
                <div class="flex flex-wrap justify-between items-center">
                    <div class="w-fit flex flex-wrap items-center gap-x-4">
                        <div class="w-[44px] h-[44px] bg-primary flex justify-center items-center text-white font-merge text-3xl uppercase rounded-full">M</div>
                        <p class="text-primary text-2xl xl:text-3xl font-merge leading-none">Michael</p>
                    </div>

                    <div class="w-fit">
                        <svg width="140" height="24" viewBox="0 0 140 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 0L15.8088 6.75757L23.4127 8.2918L18.1628 14.0024L19.0534 21.7082L12 18.48L4.94658 21.7082L5.83715 14.0024L0.587322 8.2918L8.19115 6.75757L12 0Z" fill="#FF69D5" />
                            <path d="M41 0L44.8088 6.75757L52.4127 8.2918L47.1628 14.0024L48.0534 21.7082L41 18.48L33.9466 21.7082L34.8372 14.0024L29.5873 8.2918L37.1912 6.75757L41 0Z" fill="#FF69D5" />
                            <path d="M70 0L73.8088 6.75757L81.4127 8.2918L76.1628 14.0024L77.0534 21.7082L70 18.48L62.9466 21.7082L63.8372 14.0024L58.5873 8.2918L66.1912 6.75757L70 0Z" fill="#FF69D5" />
                            <path d="M99 0L102.809 6.75757L110.413 8.2918L105.163 14.0024L106.053 21.7082L99 18.48L91.9466 21.7082L92.8372 14.0024L87.5873 8.2918L95.1912 6.75757L99 0Z" fill="#FF69D5" />
                            <path d="M128 0L131.809 6.75757L139.413 8.2918L134.163 14.0024L135.053 21.7082L128 18.48L120.947 21.7082L121.837 14.0024L116.587 8.2918L124.191 6.75757L128 0Z" fill="#FF69D5" />
                        </svg>
                    </div>
                </div>

                <p class="text-base xl:text-lg text-secondary mt-10">
                    “The guys were great to deal with, very professional when discussing the job, <b>arrived on time</b>, very knowledgeable and didn't leave a mess! Highly recommended.”
                </p>
            </div>
        </div>
    </div>
</section>

<section class="pt-10 pb-24 xl:py-32">
    <div class="container">
        <p class="capitalize text-4xl md:text-5xl lg:text-64 font-merge text-secondary text-center leading-none"><span class="text-primary">Brands</span> We Use & Trust</p>
    </div>

    <div class="py-14 lg:py-28 partnersSlider">
        <?php for ($i = 1; $i < 10; $i++) : ?>
            <div><?= renderImg('brands' . $i . '.png', 'lib') ?></div>
        <?php endfor; ?>
    </div>

    <div class="container">
        <div class="flex flex-wrap gap-y-7 lg:-mx-3">
            <div class="w-full xl:w-7/12 lg:px-3">
                <div class="h-full bg-primary rounded-10 flex flex-wrap overflow-clip text-white shadow-lg">
                    <div class="w-5/12 grow px-3 py-10 md:px-5 lg:p-14">
                        <div class="flex flex-col justify-between h-full">
                            <div class="w-full">
                                <p class="text-4xl md:text-5xl leading-none font-merge">Fix Now, <br /><span class="text-pink">Pay Later</span></p>
                                <p class="text-base md:text-lg py-5">
                                    We take the worry out of emergency services! On Call is proud to offer interest free payment methods to our customers!
                                </p>
                            </div>
                            <div class="w-full">
                                <a href="#form" class="w-fit flex items-center rounded-lg leading-none shadow-md bg-pink text-white font-bold h-[53px] px-7">Book Online</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-fit">
                        <?= renderImg('fix-now-pay-later.png', 'lib', 'h-full') ?>
                    </div>
                </div>
            </div>

            <div class="w-full xl:w-5/12 lg:px-3">
                <div class="h-full bg-secondary rounded-10 py-10 px-5 md:p-14 text-center flex flex-col items-center justify-between gap-y-10 xl:gap-y-5">
                    <svg width="149" height="50" viewBox="0 0 149 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M72.4907 11.243C72.4907 11.6186 72.3823 11.9797 72.1657 12.3263C71.949 12.6586 71.6601 12.9113 71.299 13.0847C70.1868 12.3769 68.9662 12.023 67.6373 12.023C67.0884 12.023 66.6623 12.1313 66.359 12.348C66.0557 12.5502 65.904 12.8175 65.904 13.1497C65.904 13.3663 66.0051 13.5686 66.2073 13.7563C66.4095 13.9441 66.8501 14.1175 67.529 14.2763C68.829 14.5797 69.8762 14.9263 70.6707 15.3163C71.4651 15.6919 72.0645 16.1541 72.469 16.703C72.8734 17.2375 73.0757 17.9525 73.0757 18.848C73.0757 19.498 72.9312 20.1119 72.6423 20.6897C72.3534 21.253 71.9418 21.7513 71.4073 22.1847C70.8729 22.6036 70.2229 22.9358 69.4573 23.1813C68.6918 23.4125 67.8612 23.528 66.9657 23.528C66.0412 23.528 65.1384 23.4197 64.2573 23.203C63.3762 22.9863 62.6973 22.6686 62.2207 22.2497C61.744 21.8308 61.5057 21.383 61.5057 20.9063C61.5057 20.5308 61.5995 20.1552 61.7873 19.7797C61.9751 19.4041 62.3073 19.108 62.784 18.8913C62.9718 19.0936 63.3329 19.3175 63.8673 19.563C64.4018 19.8086 64.9579 19.9963 65.5357 20.1263C66.1134 20.2419 66.619 20.2997 67.0523 20.2997C67.5868 20.2997 68.0201 20.1913 68.3523 19.9747C68.699 19.758 68.8723 19.4763 68.8723 19.1297C68.8723 18.8263 68.699 18.5736 68.3523 18.3713C68.0201 18.1691 67.4568 17.9886 66.6623 17.8297C65.0301 17.4975 63.8023 16.9702 62.979 16.248C62.1557 15.5113 61.744 14.5075 61.744 13.2363C61.744 12.5575 61.8812 11.9291 62.1557 11.3513C62.4301 10.7736 62.8129 10.2752 63.304 9.85634C63.8095 9.43745 64.409 9.11967 65.1023 8.90301C65.8101 8.6719 66.5757 8.55634 67.399 8.55634C68.1357 8.55634 68.8145 8.61412 69.4357 8.72967C70.0712 8.84523 70.6129 9.01856 71.0607 9.24967C71.5229 9.46634 71.8768 9.74801 72.1223 10.0947C72.3679 10.4269 72.4907 10.8097 72.4907 11.243ZM84.9426 17.7213C84.9426 18.4436 84.827 19.1586 84.5959 19.8663C84.3792 20.5597 84.0181 21.1736 83.5126 21.708C83.007 22.2425 82.3859 22.6686 81.6492 22.9863C80.927 23.3041 80.1326 23.463 79.2659 23.463C78.587 23.463 77.9081 23.3547 77.2292 23.138C76.5648 22.9069 75.9509 22.5602 75.3876 22.098C74.8387 21.6213 74.3981 21.0147 74.0659 20.278C73.7337 19.5269 73.5676 18.6747 73.5676 17.7213C73.5676 16.9991 73.6759 16.2841 73.8926 15.5763C74.1237 14.8686 74.492 14.2402 74.9976 13.6913C75.5031 13.1425 76.1242 12.7019 76.8609 12.3697C77.5976 12.0375 78.3992 11.8713 79.2659 11.8713C80.1326 11.8713 80.927 12.0375 81.6492 12.3697C82.3859 12.7019 83.007 13.1425 83.5126 13.6913C84.0181 14.2402 84.3792 14.8686 84.5959 15.5763C84.827 16.2841 84.9426 16.9991 84.9426 17.7213ZM77.2942 17.6563C77.2942 18.5086 77.4748 19.1513 77.8359 19.5847C78.197 20.0036 78.6664 20.213 79.2442 20.213C79.8364 20.213 80.3059 20.0036 80.6526 19.5847C81.0137 19.1513 81.1942 18.5086 81.1942 17.6563C81.1942 16.8186 81.0137 16.1902 80.6526 15.7713C80.2914 15.338 79.822 15.1213 79.2442 15.1213C78.6664 15.1213 78.197 15.338 77.8359 15.7713C77.4748 16.1902 77.2942 16.8186 77.2942 17.6563ZM87.4198 12.023H87.5932C87.9398 12.023 88.2504 12.0952 88.5248 12.2397C88.7993 12.3697 89.0015 12.6152 89.1315 12.9763C89.2759 13.323 89.3482 13.7708 89.3482 14.3197V17.873C89.3482 18.5663 89.4637 19.1152 89.6948 19.5197C89.9259 19.9241 90.2871 20.1263 90.7782 20.1263C91.3704 20.1263 91.7821 19.8591 92.0132 19.3247C92.2587 18.7902 92.3815 18.0391 92.3815 17.0713V14.3197C92.3815 13.5686 92.5115 12.998 92.7715 12.608C93.0315 12.218 93.5154 12.023 94.2232 12.023H94.3098C95.0321 12.023 95.5159 12.1747 95.7615 12.478C96.0071 12.7813 96.1298 13.3013 96.1298 14.038V21.2963C96.1298 22.0475 95.9998 22.5747 95.7398 22.878C95.4943 23.1813 95.0104 23.333 94.2882 23.333C93.5804 23.333 93.0821 23.1886 92.7932 22.8997C92.5187 22.5963 92.3815 22.1125 92.3815 21.448V21.2097C92.1648 21.8452 91.7532 22.3797 91.1465 22.813C90.5543 23.2319 89.7743 23.4413 88.8065 23.4413C88.3732 23.4413 87.9615 23.3619 87.5715 23.203C87.1815 23.0297 86.8348 22.7769 86.5315 22.4447C86.2282 22.098 85.9898 21.6502 85.8165 21.1013C85.6576 20.5525 85.5782 19.9241 85.5782 19.2163V14.038C85.5782 13.3302 85.7154 12.8175 85.9898 12.4997C86.2643 12.1819 86.7409 12.023 87.4198 12.023ZM100.363 9.79134H100.601C101.771 9.79134 102.356 10.3836 102.356 11.568V12.6297H103.721C104.314 12.6297 104.761 12.7741 105.065 13.063C105.368 13.3375 105.52 13.7058 105.52 14.168C105.52 14.7602 105.361 15.1647 105.043 15.3813C104.725 15.598 104.205 15.7063 103.483 15.7063H102.356V18.653C102.356 19.2597 102.472 19.6786 102.703 19.9097C102.934 20.1263 103.274 20.2347 103.721 20.2347C103.808 20.2347 104.003 20.213 104.306 20.1697C104.61 20.1119 104.884 20.018 105.13 19.888C105.39 20.2347 105.52 20.7475 105.52 21.4263C105.52 21.7441 105.419 22.0619 105.216 22.3797C105.029 22.683 104.66 22.9358 104.111 23.138C103.577 23.3258 102.956 23.4197 102.248 23.4197C101.107 23.4197 100.219 23.0875 99.5831 22.423C98.9476 21.7441 98.6298 20.733 98.6298 19.3897V15.7063H98.0665C97.792 15.7063 97.532 15.6413 97.2865 15.5113C97.0553 15.3669 96.8892 15.1719 96.7881 14.9263C96.687 14.6808 96.6365 14.428 96.6365 14.168C96.6365 13.1425 97.1637 12.6297 98.2181 12.6297H98.6298V11.7847C98.6298 11.1347 98.7598 10.6436 99.0198 10.3113C99.2942 9.96467 99.742 9.79134 100.363 9.79134ZM108.106 7.86301H108.149C108.814 7.86301 109.29 8.00023 109.579 8.27467C109.868 8.54912 110.013 8.98967 110.013 9.59634V14.363C110.229 13.6986 110.605 13.1208 111.139 12.6297C111.688 12.1386 112.403 11.893 113.284 11.893C114.021 11.893 114.649 12.0663 115.169 12.413C115.704 12.7452 116.108 13.2219 116.383 13.843C116.671 14.4497 116.816 15.2152 116.816 16.1397V21.5997C116.816 22.2063 116.671 22.6469 116.383 22.9213C116.108 23.1958 115.639 23.333 114.974 23.333H114.801C113.631 23.333 113.046 22.7552 113.046 21.5997V17.2013C113.046 16.0891 112.576 15.533 111.638 15.533C111.146 15.533 110.749 15.7641 110.446 16.2263C110.157 16.6886 110.013 17.2952 110.013 18.0463V21.6213C110.013 22.228 109.868 22.6686 109.579 22.943C109.305 23.203 108.843 23.333 108.193 23.333H108.106C107.441 23.333 106.965 23.203 106.676 22.943C106.401 22.6686 106.264 22.228 106.264 21.6213V9.59634C106.264 8.98967 106.409 8.54912 106.698 8.27467C107.001 8.00023 107.47 7.86301 108.106 7.86301ZM127.659 15.728C127.659 16.1325 127.586 16.5369 127.442 16.9413C127.312 17.3313 127.081 17.6852 126.749 18.003C126.416 18.3063 125.99 18.5519 125.47 18.7397C124.95 18.9275 124.344 19.0213 123.65 19.0213C123.13 19.0213 122.61 18.978 122.09 18.8913C121.585 18.7902 121.173 18.6675 120.855 18.523C120.855 19.1152 121.144 19.5847 121.722 19.9313C122.314 20.278 123.029 20.4513 123.867 20.4513C124.979 20.4513 125.846 20.1552 126.467 19.563C126.741 19.6641 126.972 19.8663 127.16 20.1697C127.362 20.473 127.464 20.7908 127.464 21.123C127.464 21.4119 127.377 21.7008 127.204 21.9897C127.045 22.2641 126.756 22.5241 126.337 22.7697C125.932 23.0152 125.441 23.203 124.864 23.333C124.286 23.4486 123.773 23.5063 123.325 23.5063C122.473 23.5063 121.686 23.3908 120.964 23.1597C120.256 22.9286 119.635 22.5747 119.1 22.098C118.58 21.6213 118.176 21.0219 117.887 20.2997C117.598 19.5775 117.454 18.7541 117.454 17.8297C117.454 16.8908 117.598 16.053 117.887 15.3163C118.176 14.5652 118.573 13.9369 119.079 13.4313C119.599 12.9258 120.205 12.543 120.899 12.283C121.592 12.023 122.336 11.893 123.13 11.893C123.65 11.893 124.177 11.9652 124.712 12.1097C125.246 12.2397 125.73 12.4636 126.164 12.7813C126.597 13.0991 126.951 13.5108 127.225 14.0163C127.514 14.5075 127.659 15.078 127.659 15.728ZM121.115 16.573C121.289 16.703 121.599 16.8113 122.047 16.898C122.495 16.9702 122.899 17.0063 123.26 17.0063C123.679 17.0063 124.004 16.9125 124.235 16.7247C124.481 16.5369 124.604 16.2769 124.604 15.9447C124.604 15.6269 124.445 15.3597 124.127 15.143C123.824 14.9263 123.434 14.818 122.957 14.818C122.495 14.818 122.083 14.9841 121.722 15.3163C121.361 15.6341 121.159 16.053 121.115 16.573ZM132.07 14.0597C132.489 13.193 132.908 12.6225 133.327 12.348C133.746 12.0736 134.187 11.9363 134.649 11.9363C135.053 11.9363 135.414 12.0158 135.732 12.1747C136.05 12.3336 136.274 12.5575 136.404 12.8463C136.534 13.1352 136.599 13.4313 136.599 13.7347C136.599 14.5725 136.397 15.2658 135.992 15.8147C135.472 15.598 134.923 15.4897 134.345 15.4897C132.872 15.4897 132.135 16.5802 132.135 18.7613V21.1663C132.135 21.8886 131.998 22.4302 131.724 22.7913C131.464 23.1525 130.994 23.333 130.315 23.333H130.207C129.485 23.333 129.001 23.1886 128.755 22.8997C128.51 22.6108 128.387 22.1052 128.387 21.383V14.0163C128.387 13.323 128.524 12.8175 128.799 12.4997C129.073 12.1819 129.543 12.023 130.207 12.023C130.857 12.023 131.327 12.1891 131.615 12.5213C131.919 12.8536 132.07 13.3663 132.07 14.0597ZM138.952 12.023H138.995C139.66 12.023 140.137 12.1602 140.425 12.4347C140.714 12.7091 140.859 13.1497 140.859 13.7563V14.2763C141.018 13.8286 141.249 13.4241 141.552 13.063C141.855 12.7019 142.217 12.413 142.635 12.1963C143.054 11.9797 143.553 11.8713 144.13 11.8713C144.607 11.8713 145.055 11.9508 145.474 12.1097C145.893 12.2686 146.268 12.5213 146.6 12.868C146.933 13.2002 147.193 13.648 147.38 14.2113C147.568 14.7602 147.662 15.403 147.662 16.1397V21.5997C147.662 22.2063 147.518 22.6469 147.229 22.9213C146.954 23.1958 146.485 23.333 145.82 23.333H145.647C144.477 23.333 143.892 22.7552 143.892 21.5997V17.0713C143.892 15.988 143.423 15.4463 142.484 15.4463C142.253 15.4463 142.007 15.5186 141.747 15.663C141.502 15.8075 141.292 16.0819 141.119 16.4863C140.945 16.8763 140.859 17.3458 140.859 17.8947V21.6213C140.859 22.228 140.714 22.6686 140.425 22.943C140.151 23.203 139.689 23.333 139.039 23.333H138.952C138.288 23.333 137.811 23.203 137.522 22.943C137.248 22.6686 137.11 22.228 137.11 21.6213V13.7563C137.11 13.1497 137.255 12.7091 137.544 12.4347C137.847 12.1602 138.317 12.023 138.952 12.023Z" fill="#FF69D5" />
                        <path d="M64.084 27.9183H68.0273C69.7751 27.9183 71.1257 28.3444 72.079 29.1967C73.0323 30.0489 73.509 31.255 73.509 32.815C73.509 34.3606 73.0323 35.5594 72.079 36.4117C71.1257 37.2639 69.7751 37.69 68.0273 37.69H66.2723V40.7883C66.2723 41.3806 66.1279 41.8139 65.839 42.0883C65.5501 42.3628 65.0807 42.5 64.4307 42.5H64.084C63.4195 42.5 62.9429 42.37 62.654 42.11C62.3795 41.8356 62.2423 41.395 62.2423 40.7883V29.6733C62.2423 29.0667 62.3868 28.6261 62.6757 28.3517C62.9645 28.0628 63.434 27.9183 64.084 27.9183ZM66.2723 34.57H67.8107C68.3451 34.57 68.7784 34.4328 69.1107 34.1583C69.4573 33.8839 69.6307 33.4867 69.6307 32.9667C69.6307 32.4322 69.4573 32.035 69.1107 31.775C68.7784 31.5006 68.3451 31.3633 67.8107 31.3633H66.2723V34.57ZM76.4154 27.03H76.4587C77.1231 27.03 77.5998 27.1672 77.8887 27.4417C78.1776 27.7161 78.322 28.1567 78.322 28.7633V40.7883C78.322 41.3806 78.1776 41.8139 77.8887 42.0883C77.5998 42.3628 77.1376 42.5 76.502 42.5H76.4154C75.7509 42.5 75.2743 42.37 74.9854 42.11C74.7109 41.8356 74.5737 41.395 74.5737 40.7883V28.7633C74.5737 28.1567 74.7181 27.7161 75.007 27.4417C75.2959 27.1672 75.7654 27.03 76.4154 27.03ZM81.2838 31.19H81.4571C81.8038 31.19 82.1143 31.2622 82.3888 31.4067C82.6632 31.5367 82.8654 31.7822 82.9954 32.1433C83.1399 32.49 83.2121 32.9378 83.2121 33.4867V37.04C83.2121 37.7333 83.3277 38.2822 83.5588 38.6867C83.7899 39.0911 84.151 39.2933 84.6421 39.2933C85.2343 39.2933 85.646 39.0261 85.8771 38.4917C86.1227 37.9572 86.2454 37.2061 86.2454 36.2383V33.4867C86.2454 32.7356 86.3754 32.165 86.6354 31.775C86.8954 31.385 87.3793 31.19 88.0871 31.19H88.1738C88.896 31.19 89.3799 31.3417 89.6254 31.645C89.871 31.9483 89.9938 32.4683 89.9938 33.205V40.4633C89.9938 41.2144 89.8638 41.7417 89.6038 42.045C89.3582 42.3483 88.8743 42.5 88.1521 42.5C87.4443 42.5 86.946 42.3556 86.6571 42.0667C86.3827 41.7633 86.2454 41.2794 86.2454 40.615V40.3767C86.0288 41.0122 85.6171 41.5467 85.0104 41.98C84.4182 42.3989 83.6382 42.6083 82.6704 42.6083C82.2371 42.6083 81.8254 42.5289 81.4354 42.37C81.0454 42.1967 80.6988 41.9439 80.3954 41.6117C80.0921 41.265 79.8538 40.8172 79.6804 40.2683C79.5215 39.7194 79.4421 39.0911 79.4421 38.3833V33.205C79.4421 32.4972 79.5793 31.9844 79.8538 31.6667C80.1282 31.3489 80.6049 31.19 81.2838 31.19ZM94.9204 33.335C95.0793 32.9306 95.3465 32.5333 95.7221 32.1433C96.0976 31.7533 96.4948 31.4789 96.9137 31.32C97.3471 31.1467 97.7371 31.06 98.0837 31.06C99.5571 31.06 100.525 31.8256 100.987 33.3567C101.204 32.8222 101.493 32.3744 101.854 32.0133C102.215 31.6378 102.605 31.385 103.024 31.255C103.457 31.125 103.854 31.06 104.215 31.06C104.981 31.06 105.638 31.2333 106.187 31.58C106.736 31.9267 107.155 32.4178 107.444 33.0533C107.747 33.6744 107.899 34.4472 107.899 35.3717V40.5067C107.899 41.2289 107.769 41.7417 107.509 42.045C107.263 42.3483 106.794 42.5 106.1 42.5H105.905C105.255 42.5 104.8 42.3556 104.54 42.0667C104.295 41.7633 104.172 41.2433 104.172 40.5067V36.1517C104.172 35.6894 104.071 35.3139 103.869 35.025C103.681 34.7217 103.385 34.57 102.98 34.57C102.692 34.57 102.432 34.6494 102.2 34.8083C101.984 34.9672 101.825 35.2272 101.724 35.5883C101.623 35.9494 101.572 36.39 101.572 36.91V40.5283C101.572 41.2361 101.435 41.7417 101.16 42.045C100.9 42.3483 100.438 42.5 99.7737 42.5H99.5571C98.8926 42.5 98.4304 42.3556 98.1704 42.0667C97.9104 41.7633 97.7804 41.2433 97.7804 40.5067V36.1517C97.7804 35.6606 97.6648 35.2778 97.4337 35.0033C97.2171 34.7144 96.8776 34.57 96.4154 34.57C95.9676 34.57 95.6354 34.6928 95.4187 34.9383C95.2021 35.1694 95.0648 35.4728 95.0071 35.8483C94.9637 36.2094 94.9421 36.5633 94.9421 36.91V40.2683C94.9421 40.7883 94.8698 41.2217 94.7254 41.5683C94.5809 41.915 94.3643 42.1606 94.0754 42.305C93.8009 42.435 93.4832 42.5 93.1221 42.5H92.9271C92.2193 42.5 91.7498 42.3556 91.5187 42.0667C91.2876 41.7633 91.1721 41.2361 91.1721 40.485V32.945C91.1721 32.3094 91.3093 31.8617 91.5837 31.6017C91.8582 31.3272 92.3132 31.19 92.9487 31.19C93.6998 31.19 94.2126 31.3417 94.4871 31.645C94.7759 31.9339 94.9204 32.4972 94.9204 33.335ZM110.708 27.03H110.816C111.452 27.03 111.914 27.1672 112.203 27.4417C112.492 27.7161 112.636 28.1567 112.636 28.7633V32.555C112.867 32.1794 113.243 31.8617 113.763 31.6017C114.283 31.3272 114.875 31.19 115.54 31.19C116.19 31.19 116.775 31.2983 117.295 31.515C117.829 31.7172 118.284 32.035 118.66 32.4683C119.035 32.9017 119.324 33.4578 119.526 34.1367C119.728 34.8011 119.83 35.5739 119.83 36.455C119.83 37.4228 119.671 38.3039 119.353 39.0983C119.05 39.8928 118.623 40.5572 118.075 41.0917C117.54 41.6261 116.926 42.0306 116.233 42.305C115.54 42.5794 114.832 42.7167 114.11 42.7167C112.723 42.7167 111.531 42.4422 110.535 41.8933C109.856 41.5178 109.408 41.1278 109.191 40.7233C108.989 40.3044 108.888 39.8206 108.888 39.2717V28.7633C108.888 28.1567 109.032 27.7161 109.321 27.4417C109.61 27.1672 110.072 27.03 110.708 27.03ZM112.636 36.4117V39.12C113.055 39.3656 113.539 39.4883 114.088 39.4883C114.333 39.4883 114.608 39.4306 114.911 39.315C115.229 39.185 115.503 38.925 115.735 38.535C115.966 38.1306 116.081 37.5817 116.081 36.8883C116.081 36.4117 116.023 35.9711 115.908 35.5667C115.792 35.1622 115.583 34.8589 115.28 34.6567C114.991 34.4544 114.658 34.3533 114.283 34.3533C113.806 34.3533 113.409 34.5339 113.091 34.895C112.788 35.2561 112.636 35.7617 112.636 36.4117ZM130.578 34.895C130.578 35.2994 130.506 35.7039 130.362 36.1083C130.232 36.4983 130.001 36.8522 129.668 37.17C129.336 37.4733 128.91 37.7189 128.39 37.9067C127.87 38.0944 127.263 38.1883 126.57 38.1883C126.05 38.1883 125.53 38.145 125.01 38.0583C124.505 37.9572 124.093 37.8344 123.775 37.69C123.775 38.2822 124.064 38.7517 124.642 39.0983C125.234 39.445 125.949 39.6183 126.787 39.6183C127.899 39.6183 128.766 39.3222 129.387 38.73C129.661 38.8311 129.892 39.0333 130.08 39.3367C130.282 39.64 130.383 39.9578 130.383 40.29C130.383 40.5789 130.297 40.8678 130.123 41.1567C129.965 41.4311 129.676 41.6911 129.257 41.9367C128.852 42.1822 128.361 42.37 127.783 42.5C127.206 42.6156 126.693 42.6733 126.245 42.6733C125.393 42.6733 124.606 42.5578 123.883 42.3267C123.176 42.0956 122.555 41.7417 122.02 41.265C121.5 40.7883 121.096 40.1889 120.807 39.4667C120.518 38.7444 120.373 37.9211 120.373 36.9967C120.373 36.0578 120.518 35.22 120.807 34.4833C121.096 33.7322 121.493 33.1039 121.998 32.5983C122.518 32.0928 123.125 31.71 123.818 31.45C124.512 31.19 125.256 31.06 126.05 31.06C126.57 31.06 127.097 31.1322 127.632 31.2767C128.166 31.4067 128.65 31.6306 129.083 31.9483C129.517 32.2661 129.871 32.6778 130.145 33.1833C130.434 33.6744 130.578 34.245 130.578 34.895ZM124.035 35.74C124.208 35.87 124.519 35.9783 124.967 36.065C125.415 36.1372 125.819 36.1733 126.18 36.1733C126.599 36.1733 126.924 36.0794 127.155 35.8917C127.401 35.7039 127.523 35.4439 127.523 35.1117C127.523 34.7939 127.365 34.5267 127.047 34.31C126.743 34.0933 126.353 33.985 125.877 33.985C125.415 33.985 125.003 34.1511 124.642 34.4833C124.281 34.8011 124.078 35.22 124.035 35.74ZM134.99 33.2267C135.409 32.36 135.828 31.7894 136.247 31.515C136.666 31.2406 137.106 31.1033 137.569 31.1033C137.973 31.1033 138.334 31.1828 138.652 31.3417C138.97 31.5006 139.194 31.7244 139.324 32.0133C139.454 32.3022 139.519 32.5983 139.519 32.9017C139.519 33.7394 139.316 34.4328 138.912 34.9817C138.392 34.765 137.843 34.6567 137.265 34.6567C135.792 34.6567 135.055 35.7472 135.055 37.9283V40.3333C135.055 41.0556 134.918 41.5972 134.644 41.9583C134.384 42.3194 133.914 42.5 133.235 42.5H133.127C132.405 42.5 131.921 42.3556 131.675 42.0667C131.43 41.7778 131.307 41.2722 131.307 40.55V33.1833C131.307 32.49 131.444 31.9844 131.719 31.6667C131.993 31.3489 132.463 31.19 133.127 31.19C133.777 31.19 134.246 31.3561 134.535 31.6883C134.839 32.0206 134.99 32.5333 134.99 33.2267Z" fill="white" />
                        <path d="M10.9162 34.2452C10.6736 36.6948 13.2814 37.6628 14.4718 37.6628C15.6623 37.6628 18.2701 36.6948 18.0274 34.2452C17.7904 31.8528 15.5385 27.0681 14.4718 24.6758C13.4051 27.0681 11.1532 31.8528 10.9162 34.2452Z" fill="white" />
                        <path d="M16.7421 22.0786C16.7421 20.7791 16.8316 19.3403 17.3949 18.257C17.65 17.7664 17.9888 17.3799 18.4669 17.0999C18.9528 16.8153 19.7232 16.5591 20.9629 16.5591H37.846V12.0137H20.9629C19.0858 12.0137 17.486 12.4068 16.17 13.1775C14.8462 13.9526 13.9511 15.0271 13.3621 16.1599C12.2371 18.3234 12.1967 20.7807 12.1967 22.0786H11.2227V23.3773H17.7162V22.0786H16.7421Z" fill="#FF69D5" />
                        <path d="M18.8535 37.6626H37.8462V33.1172H19.8602C20.0091 34.4131 19.9376 35.8988 19.1827 37.1766C19.081 37.3488 18.9711 37.5107 18.8535 37.6626Z" fill="#FF69D5" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.834 48.5065C38.8163 48.5065 49.3405 37.9823 49.3405 25C49.3405 12.0177 38.8163 1.49351 25.834 1.49351C12.8517 1.49351 2.32749 12.0177 2.32749 25C2.32749 37.9823 12.8517 48.5065 25.834 48.5065ZM25.834 50C39.6411 50 50.834 38.8071 50.834 25C50.834 11.1929 39.6411 0 25.834 0C12.0269 0 0.833984 11.1929 0.833984 25C0.833984 38.8071 12.0269 50 25.834 50Z" fill="white" />
                    </svg>

                    <div class="flex flex-wrap gap-x-7 items-center relative">
                        <div class="w-fit h-[20px]">
                            <div class="h-full relative">
                                <div class="pulsating-circle top-0"></div>
                            </div>
                        </div>
                        <p class="font-extrabold text-xl text-white relative">Open now</p>
                    </div>

                    <p class="font-merge text-white text-4xl md:text-5xl capitalize"><span class="text-pink">24/7</span> general & emergency plumbing</p>

                    <a href="tel:<?= $phone_number ?>" class="w-fit flex items-center rounded-lg leading-none shadow-md bg-pink text-white font-bold h-[53px] px-7">Call Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= renderImg('isolation-7.png', 'background', 'w-full') ?>

<section class="bg-pink py-24 lg:py-40 form">
    <div class="container" id="form">
        <div class="bg-primary flex flex-wrap rounded-10 overflow-clip items-center shadow-lg">
            <div class="w-full xl:w-fit xl:flex-none order-2 xl:order-1">
                <?= renderImg('form.png', 'lib') ?>
            </div>

            <div class="w-full xl:w-fit xl:flex-1 text-center px-4 lg:px-16 py-10 order-1 xl:order-2">
                <p class="capitalize text-4xl md:text-5xl lg:text-64 font-merge text-white text-center leading-none"><span class="text-pink">Book Online</span> Today & Claim $50 Off</p>

                <form action="./src/form" id="mainForm" method="POST" class="mt-14 lg:mt-20 flex flex-wrap lg:-mx-3 gap-y-4 md:gap-y-7">
                    <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse" />

                    <div class="w-full md:w-1/2 md:px-2 lg:px-3">
                        <input type="text" name="name" class="form-control" placeholder="Full Name" required />
                    </div>

                    <div class="w-full md:w-1/2 md:px-2 lg:px-3">
                        <input type="email" name="email" class="form-control" placeholder="Email Address" required />
                    </div>

                    <div class="w-full md:w-1/2 md:px-2 lg:px-3">
                        <input type="tel" name="phone" id="phoneNumber" class="form-control" placeholder="Phone Number" required />
                        <p class="text-sm text-red pt-2 hidden text-start" id="phoneError">Invalid Phone Number</p>
                    </div>

                    <div class="w-full md:w-1/2 md:px-2 lg:px-3">
                        <input type="text" name="suburb" class="form-control" placeholder="Suburb" required />
                    </div>

                    <div class="w-full md:px-2 lg:px-3">
                        <select name="service" class="form-control" required>
                            <option selected disabled>Select a service</option>
                            <option>24/7 Emergency Plumbing</option>
                            <option>Unblock Drains & Sinks</option>
                            <option>Hot Water Repairs, Installs & Upgrades</option>
                            <option>Gas Installation & Repairs</option>
                            <option>Tap installation & Repairs</option>
                            <option>Toilet Installation & Repairs</option>
                            <option>Leak Detection</option>
                            <option>Roof & Guttering</option>
                        </select>
                    </div>

                    <div class="w-full md:px-2 lg:px-3">
                        <button type="submit" class="h-[53px] w-full bg-white hover:bg-light duration-150 rounded-md text-primary font-bold text-lg md:mt-7">Request A Quote</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container" id="faqs">
        <div class="w-full lg:w-11/12 xl:w-8/12 mx-auto mt-28 xl:mt-52">
            <p class="text-center text-white font-merge text-4xl md:text-5xl lg:text-64 leading-none capitalize">Frequently asked questions</p>

            <?php $faqs = [
                [
                    "question" => "How do I know if I have a leak?",
                    "answer" => "If you notice unexplained increases in your water bill, damp or discolored patches on walls or ceilings, or hear the sound of running water when no fixtures are in use, you may have a leak. Our professional licensed plumbers in West Melbourne specialize in leak detection and can promptly assess and address any potential issues.",
                ],

                [
                    "question" => "Do you operate after business hours?",
                    "answer" => "Yes, we understand that plumbing emergencies don't follow a 9-to-5 schedule. Our 24/7 emergency plumbing services are available round the clock, including holidays. Whether it's a burst pipe or a clogged drain, our local West Melbourne team is ready to provide efficient and reliable solutions whenever you need them.",
                ],

                [
                    "question" => "Are you fully licensed plumbing company?",
                    "answer" => "Absolutely. We are a family-owned business with licensed, insured, and qualified plumbers in West Melbourne. Our team has extensive experience in various plumbing services, including hot water systems repairs and installation, blocked drains, leak detection, and emergency commercial and residential plumbing services.",
                ],

                [
                    "question" => "What are the plumbing services that you provide?",
                    "answer" => "We offer a comprehensive range of plumbing services, including but not limited to toilet repairs, leak detection and repair, hot water systems repairs and installation, and emergency plumbing services. Our West Melbourne team of professional plumbers is equipped to handle any plumbing issue promptly and effectively.",
                ],

                [
                    "question" => "Do your services include Warranties or Guarantees?",
                    "answer" => "Yes, we stand by the quality of our work. We offer warranties and guarantees on our plumbing services. Our set prices, determined upon inspection, ensure transparency and fairness, and we are committed to customer satisfaction. You can trust our local specialist plumbers in West Melbourne to deliver reliable and lasting solutions.",
                ],

                [
                    "question" => "Aside from pipe leaks, what else could cause a high water bill?",
                    "answer" => "Several factors could contribute to a high water bill, such as a faul",
                ],
            ]; ?>

            <div class="accordion flex flex-col gap-y-4 md:gap-y-7 mt-14 lg:mt-24">
                <?php foreach ($faqs as $key => $faq) : ?>
                    <div class="accordion-card bg-white rounded-10 p-4 md:px-8 md:py-5">
                        <div class="accordion-head flex flex-wrap justify-between items-center">
                            <p class="w-fit flex-1 leading-none text-base md:text-lg lg:text-2xl text-primary font-bold"><?= $faq['question'] ?></p>
                            <button class="w-fit flex-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12" fill="none">
                                    <path d="M15 3L9 9L3 3" stroke="#002D85" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>

                        <div class="accordion-body text-secondary text-base md:text-lg pt-8">
                            <p><?= $faq['answer'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>