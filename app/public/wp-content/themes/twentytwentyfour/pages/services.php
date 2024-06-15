<?php
// Template name: Services

get_header();

$data = get_fields();

?>

<!-- header -->
<header class="fixed top-0 left-0 right-0 z-50 w-full pt-9 pb-7 bg-[#1d1d1e]">
  <div class="max-w-[1322px] mx-auto px-5 flex items-center justify-between">
    <a href="/index/" class="flex">
      <svg xmlns="http://www.w3.org/2000/svg" width="99" height="32" viewBox="0 0 99 32" fill="none">
        <g clip-path="url(#clip0_129_4648)">
          <path d="M42.4038 2.5936C42.4564 2.79538 42.482 3.11511 42.482 3.55278C42.482 3.97339 42.4564 4.28459 42.4038 4.48637C42.2461 5.09172 41.8823 5.48534 41.3125 5.67007C41.0226 5.7667 40.6503 5.81501 40.1956 5.81501C39.7309 5.81501 39.3543 5.7667 39.0645 5.67007C38.8101 5.58196 38.5842 5.43844 38.3866 5.23666C38.1891 5.03488 38.0555 4.78478 37.9859 4.48779C37.9248 4.25049 37.8936 3.94071 37.8936 3.5542C37.8936 3.15063 37.9248 2.83091 37.9859 2.59502C38.0555 2.30514 38.1891 2.06073 38.3866 1.85894C38.5842 1.65716 38.8087 1.50796 39.0645 1.41133C39.3273 1.32323 39.7039 1.27917 40.1956 1.27917C40.6773 1.27917 41.0496 1.32323 41.3125 1.41133C41.8908 1.61311 42.2546 2.00673 42.4038 2.5936ZM42.1537 21.5242H38.2232V7.61542H42.1537V21.5242Z" fill="#0086EE" />
          <path d="M59.0714 15.1226H51.4463L53.2993 11.4422H57.8479C58.2515 11.4422 58.6053 11.4053 58.9122 11.33C59.2192 11.2561 59.5062 11.131 59.7734 10.9548C60.0405 10.78 60.2437 10.5214 60.3844 10.1789C60.5251 9.8379 60.5947 9.41586 60.5947 8.91709C60.5947 7.97923 60.356 7.31847 59.8785 6.93196C59.401 6.54686 58.7232 6.35361 57.8479 6.35361H50.4203V21.5242H46.4771V2.67322H59.0714C60.7538 2.67322 62.0597 3.13362 62.9891 4.05301C63.9184 4.97382 64.4257 6.16035 64.5138 7.61546C64.5223 7.77319 64.5266 8.48795 64.5266 9.75833C64.5266 10.7658 64.3333 11.6667 63.9483 12.4596C63.5632 13.2526 62.9507 13.8949 62.1137 14.3851C61.2782 14.8768 60.2636 15.1226 59.0714 15.1226Z" fill="#0086EE" />
          <path d="M72.823 7.61548H79.83L77.9628 11.3229H74.3478C74.0238 11.3229 73.7382 11.3357 73.4938 11.3627C73.2479 11.3897 72.9793 11.4508 72.6852 11.5474C72.3911 11.644 72.1481 11.7747 71.9562 11.941C71.763 12.1073 71.6038 12.3417 71.4759 12.6444C71.348 12.9471 71.2855 13.308 71.2855 13.7286V21.5242H67.3408V13.0053C67.3408 12.2522 67.4545 11.5531 67.6833 10.9094C67.9106 10.2656 68.246 9.69582 68.6893 9.19989C69.1313 8.70539 69.7054 8.31745 70.4116 8.0361C71.1164 7.75616 71.9207 7.61548 72.823 7.61548Z" fill="#0086EE" />
          <path d="M93.055 21.5241H86.7713C85.869 21.5241 85.0619 21.3834 84.3528 21.1034C83.6423 20.8235 83.0682 20.4356 82.6305 19.9396C82.1914 19.4451 81.8589 18.8753 81.6316 18.2302C81.4042 17.5865 81.2905 16.8873 81.2905 16.1328V13.0037C81.2905 12.2506 81.4042 11.5515 81.6316 10.9078C81.8589 10.2641 82.1943 9.69424 82.6376 9.19831C83.0796 8.7038 83.6536 8.31587 84.3599 8.03451C85.0647 7.75457 85.869 7.61389 86.7727 7.61389H93.0564C93.9587 7.61389 94.763 7.75457 95.4693 8.03451C96.1741 8.31445 96.7482 8.70238 97.1915 9.19831C97.6335 9.69424 97.9688 10.2626 98.1976 10.9078C98.4249 11.5515 98.5401 12.2506 98.5401 13.0037V16.1328C98.5401 17.1488 98.3454 18.0568 97.9546 18.854C97.5652 19.6512 96.9485 20.2963 96.1073 20.7866C95.2632 21.2797 94.2472 21.5241 93.055 21.5241ZM94.5925 15.4251V13.7285C94.5925 13.3078 94.5286 12.9469 94.4021 12.6442C94.2742 12.3416 94.1151 12.1071 93.9218 11.9408C93.7285 11.7746 93.4856 11.6424 93.1928 11.5472C92.8987 11.4506 92.6301 11.3895 92.3843 11.3625C92.1384 11.3369 91.8542 11.3227 91.5303 11.3227H88.2961C87.9721 11.3227 87.6864 11.3355 87.442 11.3625C87.1962 11.3895 86.9276 11.4478 86.6335 11.5401C86.3393 11.6325 86.0992 11.7618 85.9102 11.928C85.7212 12.0943 85.5621 12.3316 85.4299 12.6371C85.2992 12.9441 85.2324 13.3078 85.2324 13.7285V15.4237C85.2324 15.8443 85.2977 16.2053 85.4299 16.5079C85.5621 16.8106 85.7212 17.0451 85.9102 17.2113C86.0978 17.3776 86.3393 17.5069 86.6335 17.5993C86.9276 17.6916 87.1962 17.7499 87.442 17.7769C87.6879 17.8025 87.9721 17.8167 88.2961 17.8167H91.5303C91.8542 17.8167 92.1399 17.8039 92.3843 17.7769C92.6301 17.7499 92.8987 17.6916 93.1928 17.5993C93.487 17.5069 93.7271 17.3776 93.9161 17.2113C94.1051 17.0451 94.2643 16.8106 94.3964 16.5079C94.5271 16.2067 94.5925 15.8457 94.5925 15.4251Z" fill="#0086EE" />
          <path d="M27.2591 30.5206H4.263C1.9084 30.5206 0 28.6122 0 26.2576V3.263C0 0.908404 1.9084 -1 4.263 -1H27.2591C29.6136 -1 31.5221 0.908404 31.5221 3.263V26.2591C31.5221 28.6122 29.6122 30.5206 27.2591 30.5206Z" fill="#0086EE" />
          <path d="M5.27391 8.76944C5.38191 8.50229 5.68316 8.36871 5.95315 8.46818L17.3993 12.6644C18.5532 13.1333 18.5318 14.0683 17.3993 15.4481L10.5075 25.1436C10.3341 25.388 9.99305 25.442 9.75148 25.2616L6.69917 22.9823C6.45903 22.8032 6.41355 22.4622 6.59686 22.2263L11.0858 16.4428C11.6087 15.8318 11.5405 15.424 11.0858 15.1497L4.29626 12.6559C4.01348 12.5521 3.87138 12.2338 3.98506 11.9539L5.27391 8.76944Z" fill="white" />
          <path d="M20.3086 18.0116L18.3164 20.9417C18.1899 21.1278 18.1942 21.3722 18.3249 21.5556L20.8813 25.0967C21.0703 25.3582 21.4454 25.3937 21.6799 25.1734L24.3073 22.708C24.5105 22.5176 24.5332 22.2035 24.3599 21.9847L21.1669 17.9789C20.9452 17.6975 20.5118 17.7146 20.3086 18.0116Z" fill="white" />
          <path d="M18.2998 7.53166H13.2525C13.1743 7.53166 13.1104 7.46772 13.1104 7.38956V2.34217C13.1104 2.26402 13.1743 2.20007 13.2525 2.20007H18.2998C18.378 2.20007 18.4419 2.26402 18.4419 2.34217V7.38956C18.4419 7.46772 18.378 7.53166 18.2998 7.53166Z" fill="white" />
          <path d="M21.3355 9.83229L25.7065 8.44682C25.9808 8.36014 26.2749 8.50508 26.3715 8.77649L27.5467 12.0647C27.6462 12.3418 27.5012 12.6473 27.2241 12.7468L22.7707 14.3525C22.4837 14.4562 22.1696 14.2999 22.0787 14.0086L20.986 10.5002C20.8993 10.2188 21.0542 9.9204 21.3355 9.83229Z" fill="white" />
          <path d="M38.1905 24.1715C38.1109 24.1715 38.0484 24.1928 38.0058 24.2369C37.9617 24.2809 37.9404 24.3463 37.9404 24.433V27.8221C37.9404 27.9059 37.9617 27.9698 38.0058 28.0153C38.0498 28.0608 38.1109 28.0835 38.1905 28.0835C38.2772 28.0835 38.3412 28.0608 38.3838 28.0153C38.425 27.9698 38.4463 27.9059 38.4463 27.8221V24.433C38.4463 24.3463 38.425 24.2809 38.3809 24.2369C38.3369 24.1928 38.2729 24.1715 38.1905 24.1715Z" fill="white" />
          <path d="M41.9987 24.21H39.1098C39.0402 24.21 38.9862 24.2284 38.9464 24.264C38.9066 24.2995 38.8867 24.3535 38.8867 24.4217C38.8867 24.4913 38.9066 24.5439 38.9464 24.5823C38.9862 24.6206 39.0402 24.6391 39.1098 24.6391H40.3006V27.8221C40.3006 27.906 40.3219 27.9699 40.366 28.0154C40.41 28.0609 40.4726 28.0836 40.5564 28.0836C40.6402 28.0836 40.7028 28.0609 40.744 28.0154C40.7852 27.9699 40.8065 27.906 40.8065 27.8221V24.6391H41.9973C42.0698 24.6391 42.1252 24.6206 42.1635 24.5823C42.2019 24.5439 42.2204 24.4913 42.2204 24.4217C42.2204 24.3535 42.2019 24.2995 42.1635 24.264C42.1266 24.227 42.0712 24.21 41.9987 24.21Z" fill="white" />
          <path d="M45.6864 25.4576C45.5343 25.3837 45.3396 25.3453 45.1037 25.3453C44.9659 25.3453 44.8181 25.3624 44.6604 25.3965C44.5027 25.4306 44.3435 25.4874 44.1844 25.5684C44.1332 25.5869 44.0977 25.6153 44.0778 25.6551C44.0579 25.6949 44.0479 25.7361 44.0508 25.7773C44.0522 25.8185 44.065 25.8569 44.0892 25.891C44.1133 25.9251 44.1446 25.9478 44.1844 25.9564C44.2242 25.9649 44.271 25.9578 44.3265 25.9322C44.4643 25.864 44.5965 25.8128 44.7243 25.7802C44.8508 25.7475 44.9744 25.7318 45.0938 25.7318C45.3013 25.7318 45.4476 25.7802 45.5343 25.8754C45.621 25.972 45.665 26.1269 45.665 26.34V26.4978H45.486C45.0938 26.4978 44.7826 26.5219 44.5496 26.5717C44.3179 26.62 44.1531 26.701 44.055 26.8132C43.957 26.9255 43.9087 27.0804 43.9087 27.2751C43.9087 27.4271 43.9499 27.5649 44.0309 27.6886C44.1119 27.8122 44.227 27.9102 44.3734 27.9827C44.5197 28.0552 44.6846 28.0921 44.865 28.0921C45.0142 28.0921 45.1464 28.0651 45.2643 28.014C45.3823 27.9614 45.4803 27.8861 45.5613 27.788C45.6096 27.7284 45.6452 27.6601 45.675 27.5863V27.825C45.675 27.9088 45.6963 27.9713 45.7375 28.0154C45.7787 28.0594 45.837 28.0808 45.9095 28.0808C45.9862 28.0808 46.043 28.0594 46.0842 28.0154C46.124 27.9713 46.1439 27.9088 46.1439 27.825V26.3884C46.1439 26.1496 46.1056 25.9521 46.0302 25.7986C45.9535 25.6466 45.8398 25.5329 45.6864 25.4576ZM45.5727 27.3617C45.5116 27.4754 45.4277 27.5664 45.3226 27.6331C45.2174 27.6999 45.0952 27.734 44.9574 27.734C44.7826 27.734 44.6462 27.6886 44.5467 27.5976C44.4472 27.5067 44.3975 27.3916 44.3975 27.2495C44.3975 27.1372 44.4302 27.0491 44.4956 26.9852C44.5609 26.9212 44.6746 26.8772 44.8352 26.8516C44.9972 26.826 45.2174 26.8132 45.4959 26.8132H45.665V26.9653C45.665 27.1173 45.6338 27.2481 45.5727 27.3617Z" fill="white" />
          <path d="M48.8365 25.4605C48.6987 25.3838 48.5225 25.3468 48.3093 25.3468C48.0876 25.3468 47.8915 25.3994 47.7196 25.5045C47.586 25.5855 47.4823 25.6992 47.407 25.8413V25.6083C47.407 25.5244 47.3857 25.4619 47.3444 25.4207C47.3032 25.3795 47.2436 25.3582 47.1682 25.3582C47.0915 25.3582 47.0318 25.3795 46.9892 25.4207C46.9451 25.4619 46.9238 25.5244 46.9238 25.6083V27.8279C46.9238 27.9117 46.9451 27.9742 46.9892 28.0183C47.0332 28.0623 47.0929 28.0836 47.1682 28.0836C47.3345 28.0836 47.4183 27.9984 47.4183 27.8279V26.5433C47.4183 26.3003 47.488 26.107 47.6272 25.9635C47.7665 25.82 47.9526 25.7489 48.1843 25.7489C48.3832 25.7489 48.5281 25.8029 48.6191 25.9124C48.71 26.0218 48.7555 26.1937 48.7555 26.4296V27.8279C48.7555 27.9117 48.7768 27.9742 48.8209 28.0183C48.8649 28.0623 48.926 28.0836 49.0056 28.0836C49.0852 28.0836 49.1463 28.0623 49.1875 28.0183C49.2287 27.9742 49.25 27.9117 49.25 27.8279V26.4026C49.25 26.1639 49.2159 25.9649 49.1463 25.81C49.0781 25.6537 48.9743 25.5372 48.8365 25.4605Z" fill="white" />
          <path d="M52.1827 24.1715C52.1032 24.1715 52.0421 24.1928 52.0009 24.234C51.9596 24.2752 51.9383 24.3378 51.9383 24.4216V25.8454C51.8744 25.7176 51.7806 25.6096 51.6556 25.5243C51.485 25.4064 51.2818 25.3481 51.0459 25.3481C50.8101 25.3481 50.604 25.4035 50.4278 25.5144C50.2516 25.6252 50.1152 25.7829 50.02 25.9875C49.9234 26.1922 49.8765 26.4366 49.8765 26.7194C49.8765 26.9993 49.9248 27.2423 50.0228 27.4512C50.1209 27.6601 50.2573 27.8192 50.4335 27.9301C50.6097 28.0409 50.8129 28.0963 51.0459 28.0963C51.2818 28.0963 51.485 28.0366 51.6584 27.9173C51.7834 27.8306 51.8758 27.7212 51.9383 27.5919V27.8306C51.9383 27.9144 51.9596 27.9769 52.0037 28.021C52.0477 28.065 52.1074 28.0864 52.1827 28.0864C52.2623 28.0864 52.3248 28.065 52.3675 28.021C52.4115 27.9769 52.4328 27.9144 52.4328 27.8306V24.4244C52.4328 24.3406 52.4115 24.2781 52.3675 24.2369C52.3248 24.1928 52.2623 24.1715 52.1827 24.1715ZM51.576 27.5876C51.458 27.6643 51.3188 27.7013 51.1596 27.7013C50.9237 27.7013 50.7347 27.6174 50.5912 27.4483C50.4477 27.2792 50.3767 27.0362 50.3767 26.7165C50.3767 26.5019 50.4093 26.3229 50.4747 26.178C50.5401 26.033 50.631 25.9236 50.749 25.8483C50.8669 25.7744 51.0033 25.7374 51.1596 25.7374C51.3984 25.7374 51.5902 25.8213 51.7309 25.9875C51.873 26.1538 51.9426 26.3968 51.9426 26.7165C51.9426 26.9311 51.9113 27.1101 51.8474 27.2551C51.7849 27.4014 51.6939 27.5123 51.576 27.5876Z" fill="white" />
          <path d="M58.3917 24.234C58.3519 24.1928 58.2951 24.1715 58.2226 24.1715C58.1572 24.1715 58.1061 24.1843 58.0705 24.2099C58.0336 24.2355 57.9995 24.2795 57.9668 24.3406L56.5927 26.9183L55.2186 24.3406C55.1859 24.2795 55.1504 24.2355 55.112 24.2099C55.0736 24.1843 55.0225 24.1715 54.9571 24.1715C54.8847 24.1715 54.8278 24.1928 54.7852 24.234C54.744 24.2752 54.7227 24.3349 54.7227 24.4102V27.8434C54.7227 27.9158 54.7425 27.9741 54.7823 28.0182C54.8221 28.0622 54.879 28.0835 54.9514 28.0835C55.0282 28.0835 55.085 28.0622 55.1234 28.0182C55.1617 27.9741 55.1802 27.9173 55.1802 27.8434V25.1477L56.3724 27.3545C56.398 27.3986 56.4279 27.4327 56.462 27.4583C56.4961 27.4839 56.5387 27.4966 56.5899 27.4966C56.6439 27.4966 56.6865 27.4853 56.7177 27.4611C56.749 27.437 56.7788 27.4029 56.8073 27.3545L57.9938 25.1364V27.8448C57.9938 27.9173 58.0123 27.9755 58.0506 28.0196C58.089 28.0636 58.1458 28.0849 58.2226 28.0849C58.2993 28.0849 58.3562 28.0636 58.3945 28.0196C58.4329 27.9755 58.4514 27.9187 58.4514 27.8448V24.4117C58.4514 24.3349 58.4315 24.2752 58.3917 24.234Z" fill="white" />
          <path d="M62.0421 27.8406L61.6769 27.4484C61.7167 27.3802 61.755 27.3063 61.7891 27.2268C61.8332 27.123 61.8701 27.0108 61.9 26.89C61.9298 26.7692 61.9497 26.6399 61.9611 26.5035C61.9667 26.4495 61.9554 26.4068 61.9284 26.377C61.9014 26.3472 61.8616 26.3315 61.8104 26.3315C61.7607 26.3315 61.7238 26.3443 61.6953 26.3699C61.6683 26.3955 61.6499 26.4353 61.6428 26.4864C61.6342 26.593 61.62 26.6939 61.6001 26.7891C61.5802 26.8843 61.5547 26.9738 61.5262 27.0548C61.5049 27.1145 61.4808 27.1671 61.4552 27.2182L60.8115 26.5035C60.9394 26.4211 61.0445 26.3429 61.1227 26.269C61.2122 26.1852 61.2776 26.0985 61.3173 26.0118C61.3571 25.9251 61.377 25.8299 61.377 25.729C61.377 25.5457 61.3159 25.4022 61.1923 25.2956C61.0701 25.1891 60.9095 25.1365 60.7134 25.1365C60.5656 25.1365 60.4378 25.1635 60.3269 25.2189C60.2161 25.2729 60.1308 25.3496 60.0711 25.4463C60.0115 25.5429 59.9816 25.6551 59.9816 25.783C59.9816 25.8981 60.0086 26.0075 60.0612 26.1127C60.1109 26.2108 60.1933 26.3216 60.3084 26.4466L60.2516 26.4822C60.1535 26.5447 60.0669 26.6086 59.9916 26.674C59.9162 26.7394 59.8537 26.8076 59.804 26.8758C59.7528 26.9454 59.7159 27.0193 59.6917 27.0989C59.6676 27.1785 59.6548 27.2623 59.6548 27.3518C59.6548 27.5024 59.6917 27.6318 59.767 27.7426C59.8424 27.8534 59.9504 27.9387 60.0896 27.9998C60.2303 28.0609 60.3965 28.0922 60.5912 28.0922C60.7759 28.0922 60.9507 28.0538 61.1127 27.9756C61.2534 27.9074 61.3756 27.8165 61.4808 27.7014L61.7365 27.9813C61.7692 28.0168 61.7991 28.0424 61.8261 28.0595C61.8531 28.0765 61.8886 28.0836 61.9326 28.0836C61.9824 28.0836 62.0207 28.0708 62.0506 28.0467C62.0804 28.0225 62.0961 27.9913 62.0975 27.9529C62.0989 27.9174 62.0804 27.879 62.0421 27.8406ZM60.4349 25.5159C60.506 25.4491 60.5983 25.4164 60.7134 25.4164C60.8143 25.4164 60.8967 25.4462 60.9593 25.5059C61.0218 25.5656 61.053 25.648 61.053 25.7518C61.053 25.8171 61.036 25.8797 61.0033 25.9379C60.9706 25.9962 60.9181 26.0559 60.8442 26.1184C60.7845 26.1681 60.7021 26.2264 60.6068 26.2875C60.5415 26.215 60.4875 26.1511 60.4491 26.1013C60.4036 26.0431 60.3724 25.9877 60.3553 25.9379C60.3383 25.8882 60.3283 25.8356 60.3283 25.7802C60.3283 25.6708 60.3639 25.5827 60.4349 25.5159ZM61.0118 27.7C60.8939 27.7611 60.7589 27.7923 60.6068 27.7923C60.4193 27.7923 60.2743 27.7511 60.1734 27.6701C60.0726 27.5877 60.0214 27.4754 60.0214 27.3305C60.0214 27.2438 60.037 27.1657 60.0669 27.0975C60.0967 27.0292 60.145 26.9639 60.2118 26.8985C60.2786 26.8346 60.3667 26.7664 60.4761 26.6967L60.5131 26.6726L61.2719 27.4882C61.1937 27.5778 61.107 27.6488 61.0118 27.7Z" fill="white" />
          <path d="M66.8721 24.234C66.8324 24.1928 66.7755 24.1715 66.703 24.1715C66.6377 24.1715 66.5865 24.1843 66.551 24.2099C66.5141 24.2355 66.48 24.2795 66.4473 24.3406L65.0732 26.9183L63.6991 24.3406C63.6664 24.2795 63.6308 24.2355 63.5925 24.2099C63.5541 24.1843 63.503 24.1715 63.4376 24.1715C63.3651 24.1715 63.3083 24.1928 63.2656 24.234C63.2244 24.2752 63.2031 24.3349 63.2031 24.4102V27.8434C63.2031 27.9158 63.223 27.9741 63.2628 28.0182C63.3026 28.0622 63.3594 28.0835 63.4319 28.0835C63.5086 28.0835 63.5655 28.0622 63.6038 28.0182C63.6422 27.9741 63.6607 27.9173 63.6607 27.8434V25.1477L64.8529 27.3545C64.8785 27.3986 64.9083 27.4327 64.9424 27.4583C64.9765 27.4839 65.0192 27.4966 65.0703 27.4966C65.1243 27.4966 65.167 27.4853 65.1982 27.4611C65.2295 27.437 65.2593 27.4029 65.2877 27.3545L66.4743 25.1364V27.8448C66.4743 27.9173 66.4927 27.9755 66.5311 28.0196C66.5695 28.0636 66.6263 28.0849 66.703 28.0849C66.7798 28.0849 66.8366 28.0636 66.875 28.0196C66.9134 27.9755 66.9318 27.9187 66.9318 27.8448V24.4117C66.9332 24.3349 66.9119 24.2752 66.8721 24.234Z" fill="white" />
          <path d="M72.1451 26.0317H71.1817C71.1163 26.0317 71.0651 26.0473 71.0268 26.08C70.9884 26.1127 70.9699 26.1596 70.9699 26.2221C70.9699 26.2832 70.9884 26.333 71.0268 26.3685C71.0651 26.4054 71.1163 26.4225 71.1817 26.4225H71.922V27.4982C71.8069 27.538 71.689 27.5721 71.5653 27.5976C71.4033 27.6303 71.2385 27.6474 71.068 27.6474C70.6076 27.6474 70.2594 27.5181 70.0264 27.2609C69.7919 27.0037 69.6754 26.6257 69.6754 26.1297C69.6754 25.8072 69.7251 25.5329 69.8246 25.3056C69.9241 25.0796 70.0733 24.9063 70.2736 24.7883C70.4726 24.6704 70.7156 24.6121 71.0026 24.6121C71.1945 24.6121 71.3721 24.6363 71.5327 24.6832C71.6946 24.7301 71.8495 24.8082 71.9973 24.9176C72.0485 24.9503 72.0968 24.9645 72.1408 24.9588C72.1863 24.9532 72.2247 24.9347 72.2545 24.902C72.2858 24.8693 72.3057 24.831 72.317 24.7883C72.3284 24.7443 72.327 24.7016 72.3142 24.6576C72.3014 24.6135 72.273 24.5766 72.2304 24.5439C72.057 24.4103 71.8637 24.3123 71.6534 24.2526C71.4431 24.1929 71.2257 24.1631 71.0012 24.1631C70.7113 24.1631 70.4513 24.2086 70.2211 24.2995C69.9909 24.3904 69.7948 24.5212 69.6328 24.6945C69.4708 24.8665 69.3486 25.0739 69.2662 25.3141C69.1823 25.5557 69.1411 25.8285 69.1411 26.1326C69.1411 26.539 69.215 26.8886 69.3614 27.1827C69.5077 27.4769 69.7237 27.7028 70.0093 27.8605C70.2935 28.0183 70.6417 28.0978 71.0509 28.0978C71.2541 28.0978 71.4602 28.0779 71.6705 28.0382C71.8808 27.9984 72.0627 27.9472 72.2147 27.8861C72.2659 27.8676 72.3014 27.8378 72.3241 27.7966C72.3455 27.7554 72.3568 27.7056 72.3568 27.6474V26.2491C72.3568 26.1809 72.3384 26.1269 72.3 26.0914C72.2616 26.0502 72.209 26.0317 72.1451 26.0317Z" fill="white" />
          <path d="M74.5435 25.3411C74.3005 25.3553 74.0988 25.4192 73.9396 25.5315C73.8202 25.6153 73.7307 25.729 73.6682 25.8711V25.6082C73.6682 25.5244 73.6469 25.4619 73.6057 25.4207C73.5645 25.3795 73.5048 25.3581 73.4295 25.3581C73.3542 25.3581 73.2931 25.3795 73.2504 25.4207C73.2078 25.4619 73.1851 25.5244 73.1851 25.6082V27.8278C73.1851 27.9117 73.2064 27.9742 73.2504 28.0182C73.2945 28.0623 73.357 28.0836 73.4408 28.0836C73.5204 28.0836 73.5815 28.0623 73.6227 28.0182C73.6639 27.9742 73.6853 27.9117 73.6853 27.8278V26.5546C73.6853 26.3258 73.7492 26.1468 73.8785 26.0161C74.0078 25.8853 74.1911 25.8072 74.4313 25.7816L74.5293 25.7759C74.6061 25.7688 74.6615 25.7446 74.6984 25.702C74.7354 25.6608 74.751 25.6054 74.7467 25.5358C74.7439 25.4633 74.7226 25.4121 74.6871 25.3809C74.6487 25.351 74.6018 25.3382 74.5435 25.3411Z" fill="white" />
          <path d="M76.9379 25.5159C76.7461 25.4036 76.5187 25.3468 76.2573 25.3468C76.0612 25.3468 75.885 25.3781 75.7272 25.442C75.5695 25.506 75.4345 25.5969 75.3223 25.7163C75.21 25.8356 75.1233 25.9806 75.0636 26.1482C75.004 26.3173 74.9741 26.5063 74.9741 26.7166C74.9741 26.9966 75.0267 27.2396 75.1319 27.4456C75.237 27.6531 75.3862 27.8122 75.578 27.9245C75.7699 28.0368 75.9972 28.0936 76.2587 28.0936C76.4548 28.0936 76.631 28.0623 76.7887 27.9984C76.9465 27.9344 77.0815 27.8435 77.1937 27.7241C77.306 27.6048 77.3927 27.4598 77.4523 27.2893C77.512 27.1188 77.5419 26.9284 77.5419 26.7181C77.5419 26.4396 77.4893 26.1966 77.3841 25.9919C77.279 25.7859 77.1298 25.6282 76.9379 25.5159ZM76.945 27.2566C76.8811 27.4016 76.7902 27.5124 76.6722 27.5891C76.5543 27.6659 76.415 27.7028 76.2559 27.7028C76.02 27.7028 75.831 27.619 75.6875 27.4499C75.5439 27.2808 75.4729 27.0378 75.4729 26.7181C75.4729 26.5035 75.5056 26.3245 75.5709 26.1795C75.6363 26.0346 75.7273 25.9252 75.8452 25.8498C75.9631 25.7759 76.0995 25.739 76.2559 25.739C76.4946 25.739 76.685 25.8228 76.8271 25.9891C76.9692 26.1554 77.0388 26.3983 77.0388 26.7181C77.0403 26.9312 77.009 27.1117 76.945 27.2566Z" fill="white" />
          <path d="M80.208 25.358C80.1285 25.358 80.0674 25.3793 80.0262 25.4206C79.9849 25.4618 79.9636 25.5243 79.9636 25.6081V26.897C79.9636 27.1357 79.8954 27.329 79.759 27.4739C79.6226 27.6188 79.4464 27.6913 79.229 27.6913C79.0329 27.6913 78.8893 27.6373 78.7984 27.5307C78.7075 27.4242 78.662 27.2579 78.662 27.0334V25.6081C78.662 25.5243 78.6407 25.4618 78.5966 25.4206C78.5526 25.3793 78.4915 25.358 78.4119 25.358C78.3323 25.358 78.2712 25.3793 78.23 25.4206C78.1888 25.4618 78.1675 25.5243 78.1675 25.6081V27.0334C78.1675 27.2693 78.2016 27.4654 78.2712 27.6217C78.3394 27.778 78.446 27.8959 78.5895 27.9755C78.733 28.0551 78.9121 28.0949 79.1252 28.0949C79.3426 28.0949 79.5331 28.0395 79.6936 27.9286C79.8102 27.849 79.9039 27.741 79.9736 27.6089V27.8277C79.9736 27.9116 79.9949 27.9741 80.0361 28.0181C80.0773 28.0622 80.1384 28.0835 80.218 28.0835C80.3771 28.0835 80.4581 27.9983 80.4581 27.8277V25.6081C80.4581 25.5243 80.4368 25.4618 80.3928 25.4206C80.3487 25.3793 80.2876 25.358 80.208 25.358Z" fill="white" />
          <path d="M83.6625 25.9863C83.5644 25.7816 83.428 25.6239 83.2546 25.5131C83.0813 25.4022 82.8752 25.3468 82.6393 25.3468C82.4006 25.3468 82.1946 25.4065 82.024 25.5258C81.899 25.6125 81.8052 25.7219 81.7413 25.8527V25.6083C81.7413 25.5244 81.72 25.4619 81.6787 25.4207C81.6375 25.3795 81.5764 25.3582 81.4968 25.3582C81.4201 25.3582 81.3604 25.3795 81.3178 25.4207C81.2752 25.4619 81.2524 25.5244 81.2524 25.6083V28.8126C81.2524 28.8922 81.2738 28.9547 81.3178 28.9974C81.3619 29.0414 81.4215 29.0627 81.4968 29.0627C81.5764 29.0627 81.639 29.0414 81.6816 28.9974C81.7256 28.9533 81.7469 28.8922 81.7469 28.8126V27.5906C81.8109 27.7185 81.9047 27.8264 82.0297 27.9146C82.2002 28.0339 82.4035 28.0936 82.6393 28.0936C82.8752 28.0936 83.0813 28.0382 83.2575 27.9273C83.4337 27.8165 83.5701 27.6573 83.6653 27.4485C83.7619 27.2396 83.8088 26.9966 83.8088 26.7166C83.8088 26.4353 83.7605 26.1909 83.6625 25.9863ZM83.2106 27.2566C83.1452 27.4016 83.0543 27.5124 82.9363 27.5891C82.8184 27.6659 82.682 27.7028 82.5257 27.7028C82.2869 27.7028 82.0951 27.619 81.9544 27.4499C81.8123 27.2808 81.7427 27.0378 81.7427 26.7181C81.7427 26.5035 81.7739 26.3245 81.8379 26.1795C81.9018 26.0346 81.9914 25.9252 82.1093 25.8498C82.2272 25.7759 82.3665 25.739 82.5257 25.739C82.7644 25.739 82.9562 25.8228 83.0969 25.9891C83.239 26.1554 83.3086 26.3983 83.3086 26.7181C83.3086 26.9312 83.2759 27.1117 83.2106 27.2566Z" fill="white" />
        </g>
        <defs>
          <clipPath id="clip0_129_4648">
            <rect width="99" height="32" fill="white" />
          </clipPath>
        </defs>
      </svg>
    </a>
    <div class="items-center ml-auto gap-10 hidden lg:flex">
      <ul class="flex gap-10 items-center">
        <li><a class="text-white text-base font-semibold hover:text-[#0286EF] transition-all" href="/index/">Bosh
            sahifa </a></li>
        <li><a class="text-white text-base font-semibold hover:text-[#0286EF] transition-all" href="/services/">Xizmatlar</a></li>
        <li><a class="text-white text-base font-semibold hover:text-[#0286EF] transition-all" href="/news/">Yangiliklar</a></li>
        <li><a class="text-white text-base font-semibold hover:text-[#0286EF] transition-all" href="/employees/">Xodimlar</a></li>
        <li><a class="text-white text-base font-semibold hover:text-[#0286EF] transition-all" href="/elonlar/">Vakansiya</a></li>
      </ul>
      <a class="text-[#D9FFFF] text-sm font-bold  bg-[#0086EE] rounded-lg py-2.5 px-12 border border-transparent hover:border-[#0086EE] hover:bg-transparent transition-all" style="box-shadow: 0px 1px 14px -4px #016079;" href="/index/#contact">Ulanish</a>


    </div>
    <div class="flex flex-col relative lg:ml-5 ml-auto mr-5 lg:mr-0">
      <button id="select-btn" class=" flex items-center gap-3 py-2 px-2.5 border border-[#5D5D5D] rounded-lg">
        <span class="text-white text-sm font-semibold">UZ</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24" fill="none">
          <path d="M3.19863 11H5.23523C6.39178 11 7.32935 11.8954 7.32935 13V14C7.32935 15.1046 8.26692 16 9.42347 16C10.58 16 11.5176 16.8954 11.5176 18V20.9451M8.37641 3.93552V5.5C8.37641 6.88071 9.54837 8 10.9941 8H11.5176C12.6741 8 13.6117 8.89543 13.6117 10C13.6117 11.1046 14.5493 12 15.7058 12C16.8624 12 17.7999 11.1046 17.7999 10C17.7999 8.89543 18.7375 8 19.8941 8L21.0086 8M15.7058 20.4879V18C15.7058 16.8954 16.6434 16 17.7999 16H21.0086M21.9882 12C21.9882 16.9706 17.7691 21 12.5646 21C7.36017 21 3.14111 16.9706 3.14111 12C3.14111 7.02944 7.36017 3 12.5646 3C17.7691 3 21.9882 7.02944 21.9882 12Z" stroke="#5D5E5F" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
      <ul class="select-menu hidden absolute top-12 left-0 w-full items-center justify-center flex-col gap-1 mt-1">
        <li class="w-full"><a class="option border border-[#5D5D5D] text-white font-bold p-2.5 w-full block rounded-lg text-sm" href="/services-eng/">EN</a></li>
        <li class="w-full"><a class="option border border-[#5D5D5D] text-white font-bold p-2.5 w-full block rounded-lg text-sm" href="/services-ru/">RU</a></li>
      </ul>

    </div>
    <button id="headerMenuBtn" class="text-3xl lg:hidden flex text-white">
      <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
        <style>
          svg {
            fill: #ffffff
          }
        </style>
        <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
      </svg>
    </button>
  </div>
  <div id="headerResponsiveMenu" class="w-[90vw] translate-x-full transition-transform h-screen fixed top-0 right-0 bg-[#333] pt-9 px-5">
    <div class="flex justify-end">
      <button id="headerResponsiveBtn" class="text-3xl lg:hidden flex text-white">
        <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
          <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
        </svg>
      </button>
    </div>
    <div class="flex flex-col items-center justify-center pt-24">
      <ul class="flex flex-col gap-10 items-center mb-8">
        <li><a class="text-white text-base font-semibold hover:text-[#0286EF] transition-all" href="/index/">Bosh
            sahifa </a></li>
        <li><a class="text-white text-base font-semibold hover:text-[#0286EF] transition-all" href="/services/">Xizmatlar</a></li>
        <li><a class="text-white text-base font-semibold hover:text-[#0286EF] transition-all" href="/news/">Yangiliklar</a></li>
        <li><a class="text-white text-base font-semibold hover:text-[#0286EF] transition-all" href="/employees/">Xodimlar</a></li>
        <li><a class="text-white text-base font-semibold hover:text-[#0286EF] transition-all" href="/elonlar/">Vakansiya</a></li>
      </ul>
      <a class="text-[#D9FFFF] text-sm font-bold  bg-[#0086EE] rounded-lg py-2.5 px-12 border border-transparent hover:border-[#0086EE] hover:bg-transparent transition-all" style="box-shadow: 0px 1px 14px -4px #016079;" href="/index/#contact">Ulanish</a>

    </div>
  </div>
</header>

<div class="pt-24"></div>

<section class="bg-[#141415] pt-16 pb-16">
  <div class="max-w-[1322px] mx-auto px-5">
    <style>
      h1::after {
        text-shadow: 0 0 2px rgba(255, 255, 255, 0.25);
      }
    </style>
    <h1 class="md:text-[64px] text-4xl font-semibold text-white  text-center mb-24 relative after:text-[#141415] after:content-['<?= $data['xizmatlarimiz']['main_title']?>'] after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:block after:text-[68px] md:after:text-[128px] after:z-10 uppercase">
      <span class="relative z-30"><?= $data['xizmatlarimiz']['main_title']?></span>
    </h1>
    <div class="grid lg:grid-cols-3 gap-5 md:grid-cols-2 grid-cols-1">
      <div style="background-image: linear-gradient(180deg, #252527 30.75%, rgba(1, 134, 239, 0.00) 615.25%);" class="p-8 pr-9 pb-5 relative overflow-hidden rounded-lg flex flex-col hover:shadow-[0 0 10px #0086EE4D]">
        <svg class="absolute bottom-3 right-0 inline-block" xmlns="http://www.w3.org/2000/svg" width="202" height="179" viewBox="0 0 202 179" fill="none">
          <g filter="url(#filter0_f_653_1971)">
            <circle cx="110" cy="110" r="55" fill="#0086EE" fill-opacity="0.3" />
          </g>
          <defs>
            <filter id="filter0_f_653_1971" x="0" y="0" width="220" height="220" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
              <feGaussianBlur stdDeviation="27.5" result="effect1_foregroundBlur_653_1971" />
            </filter>
          </defs>
        </svg>
        <h3 class="text-xl text-white font-bold mb-5 capitalize"><?= $data['xizmatlarimiz']['card_1']['title']  ?></h3>
        <p class="text-sm text-white leading-snug mb-[56px]"><?= $data['xizmatlarimiz']['card_1']['text']  ?></p>
        <div class="flex gap-2 relative z-10 mt-auto">
          <a href="#contact" class="px-[14px] py-3 bg-[#0086EE] rounded-lg font-bold text-sm  text-white border border-transparent hover:border-[#0086EE] hover:bg-transparent transition-all">Buyurtma
            berish</a>
          <a href="#contact" class="px-[14px] py-3 border border-[#0086EE] rounded-lg font-bold text-sm  text-[#0086EE] hover:bg-white transition-all">Batafsil</a>
        </div>

      </div>
      <div style="background-image: linear-gradient(180deg, #252527 30.75%, rgba(1, 134, 239, 0.00) 615.25%);" class="p-8 pr-9 pb-5 relative overflow-hidden rounded-lg flex flex-col">
        <svg class="absolute bottom-3 right-0 inline-block" xmlns="http://www.w3.org/2000/svg" width="202" height="179" viewBox="0 0 202 179" fill="none">
          <g filter="url(#filter0_f_653_1971)">
            <circle cx="110" cy="110" r="55" fill="#0086EE" fill-opacity="0.3" />
          </g>
          <defs>
            <filter id="filter0_f_653_1971" x="0" y="0" width="220" height="220" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
              <feGaussianBlur stdDeviation="27.5" result="effect1_foregroundBlur_653_1971" />
            </filter>
          </defs>
        </svg>
        <h3 class="text-xl text-white font-bold mb-5 capitalize"><?= $data['xizmatlarimiz']['card_2']['title']  ?></h3>
        <p class="text-sm text-white leading-snug mb-[56px]"><?= $data['xizmatlarimiz']['card_2']['text']  ?></p>
        <div class="flex gap-2 relative z-10 mt-auto">
          <a href="#contact" class="px-[14px] py-3 bg-[#0086EE] rounded-lg font-bold text-sm  text-white border border-transparent hover:border-[#0086EE] hover:bg-transparent transition-all">Buyurtma
            berish</a>
          <a href="#contact" class="px-[14px] py-3 border border-[#0086EE] rounded-lg font-bold text-sm  text-[#0086EE] hover:bg-white transition-all">Batafsil</a>
        </div>

      </div>
      <div style="background-image: linear-gradient(180deg, #252527 30.75%, rgba(1, 134, 239, 0.00) 615.25%);" class="p-8 pr-9 pb-5 relative overflow-hidden rounded-lg flex flex-col">
        <svg class="absolute bottom-3 right-0 inline-block" xmlns="http://www.w3.org/2000/svg" width="202" height="179" viewBox="0 0 202 179" fill="none">
          <g filter="url(#filter0_f_653_1971)">
            <circle cx="110" cy="110" r="55" fill="#0086EE" fill-opacity="0.3" />
          </g>
          <defs>
            <filter id="filter0_f_653_1971" x="0" y="0" width="220" height="220" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
              <feGaussianBlur stdDeviation="27.5" result="effect1_foregroundBlur_653_1971" />
            </filter>
          </defs>
        </svg>
        <h3 class="text-xl text-white font-bold mb-5 capitalize"><?= $data['xizmatlarimiz']['card_3']['title']  ?></h3>
        <p class="text-sm text-white leading-snug mb-[56px]"><?= $data['xizmatlarimiz']['card_3']['text']  ?></p>
        <div class="flex gap-2 relative z-10 mt-auto">
          <a href="#contact" class="px-[14px] py-3 bg-[#0086EE] rounded-lg font-bold text-sm  text-white border border-transparent hover:border-[#0086EE] hover:bg-transparent transition-all">Buyurtma
            berish</a>
          <a href="#contact" class="px-[14px] py-3 border border-[#0086EE] rounded-lg font-bold text-sm  text-[#0086EE] hover:bg-white transition-all">Batafsil</a>
        </div>

      </div>
      <div style="background-image: linear-gradient(180deg, #252527 30.75%, rgba(1, 134, 239, 0.00) 615.25%);" class="p-8 pr-9 pb-5 relative overflow-hidden rounded-lg flex flex-col">
        <svg class="absolute bottom-3 right-0 inline-block" xmlns="http://www.w3.org/2000/svg" width="202" height="179" viewBox="0 0 202 179" fill="none">
          <g filter="url(#filter0_f_653_1971)">
            <circle cx="110" cy="110" r="55" fill="#0086EE" fill-opacity="0.3" />
          </g>
          <defs>
            <filter id="filter0_f_653_1971" x="0" y="0" width="220" height="220" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
              <feGaussianBlur stdDeviation="27.5" result="effect1_foregroundBlur_653_1971" />
            </filter>
          </defs>
        </svg>
        <h3 class="text-xl text-white font-bold mb-5 capitalize"><?= $data['xizmatlarimiz']['card_4']['title']  ?></h3>
        <p class="text-sm text-white leading-snug mb-[56px]"><?= $data['xizmatlarimiz']['card_4']['text']  ?></p>
        <div class="flex gap-2 relative z-10 mt-auto">
          <a href="#contact" class="px-[14px] py-3 bg-[#0086EE] rounded-lg font-bold text-sm  text-white border border-transparent hover:border-[#0086EE] hover:bg-transparent transition-all">Buyurtma
            berish</a>
          <a href="#contact" class="px-[14px] py-3 border border-[#0086EE] rounded-lg font-bold text-sm  text-[#0086EE] hover:bg-white transition-all">Batafsil</a>
        </div>

      </div>
      <div style="background-image: linear-gradient(180deg, #252527 30.75%, rgba(1, 134, 239, 0.00) 615.25%);" class="p-8 pr-9 pb-5 relative overflow-hidden rounded-lg flex flex-col">
        <svg class="absolute bottom-3 right-0 inline-block" xmlns="http://www.w3.org/2000/svg" width="202" height="179" viewBox="0 0 202 179" fill="none">
          <g filter="url(#filter0_f_653_1971)">
            <circle cx="110" cy="110" r="55" fill="#0086EE" fill-opacity="0.3" />
          </g>
          <defs>
            <filter id="filter0_f_653_1971" x="0" y="0" width="220" height="220" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
              <feGaussianBlur stdDeviation="27.5" result="effect1_foregroundBlur_653_1971" />
            </filter>
          </defs>
        </svg>
        <h3 class="text-xl text-white font-bold mb-5 capitalize"><?= $data['xizmatlarimiz']['card_5']['title']  ?></h3>
        <p class="text-sm text-white leading-snug mb-[56px]"><?= $data['xizmatlarimiz']['card_5']['text']  ?></p>
        <div class="flex gap-2 relative z-10 mt-auto">
          <a href="#contact" class="px-[14px] py-3 bg-[#0086EE] rounded-lg font-bold text-sm  text-white border border-transparent hover:border-[#0086EE] hover:bg-transparent transition-all">Buyurtma
            berish</a>
          <a href="#contact" class="px-[14px] py-3 border border-[#0086EE] rounded-lg font-bold text-sm  text-[#0086EE] hover:bg-white transition-all">Batafsil</a>
        </div>

      </div>
      <div style="background-image: linear-gradient(180deg, #252527 30.75%, rgba(1, 134, 239, 0.00) 615.25%);" class="p-8 pr-9 pb-5 relative overflow-hidden rounded-lg flex flex-col">
        <svg class="absolute bottom-3 right-0 inline-block" xmlns="http://www.w3.org/2000/svg" width="202" height="179" viewBox="0 0 202 179" fill="none">
          <g filter="url(#filter0_f_653_1971)">
            <circle cx="110" cy="110" r="55" fill="#0086EE" fill-opacity="0.3" />
          </g>
          <defs>
            <filter id="filter0_f_653_1971" x="0" y="0" width="220" height="220" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
              <feGaussianBlur stdDeviation="27.5" result="effect1_foregroundBlur_653_1971" />
            </filter>
          </defs>
        </svg>
        <h3 class="text-xl text-white font-bold mb-5 capitalize"><?= $data['xizmatlarimiz']['card_6']['title']  ?></h3>
        <p class="text-sm text-white leading-snug mb-[56px]"><?= $data['xizmatlarimiz']['card_6']['text']  ?></p>
        <div class="flex gap-2 relative z-10 mt-auto">
          <a href="#contact" class="px-[14px] py-3 bg-[#0086EE] rounded-lg font-bold text-sm  text-white border border-transparent hover:border-[#0086EE] hover:bg-transparent transition-all">Buyurtma
            berish</a>
          <a href="#contact" class="px-[14px] py-3 border border-[#0086EE] rounded-lg font-bold text-sm  text-[#0086EE] hover:bg-white transition-all">Batafsil</a>
        </div>

      </div>
      <div style="background-image: linear-gradient(180deg, #252527 30.75%, rgba(1, 134, 239, 0.00) 615.25%);" class="p-8 pr-9 pb-5 relative overflow-hidden rounded-lg flex flex-col">
        <svg class="absolute bottom-3 right-0 inline-block" xmlns="http://www.w3.org/2000/svg" width="202" height="179" viewBox="0 0 202 179" fill="none">
          <g filter="url(#filter0_f_653_1971)">
            <circle cx="110" cy="110" r="55" fill="#0086EE" fill-opacity="0.3" />
          </g>
          <defs>
            <filter id="filter0_f_653_1971" x="0" y="0" width="220" height="220" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
              <feGaussianBlur stdDeviation="27.5" result="effect1_foregroundBlur_653_1971" />
            </filter>
          </defs>
        </svg>
        <h3 class="text-xl text-white font-bold mb-5 capitalize"><?= $data['xizmatlarimiz']['card_7']['title']  ?></h3>
        <p class="text-sm text-white leading-snug mb-[56px]"><?= $data['xizmatlarimiz']['card_7']['text']  ?></p>
        <div class="flex gap-2 relative z-10 mt-auto">
          <a href="#contact" class="px-[14px] py-3 bg-[#0086EE] rounded-lg font-bold text-sm  text-white border border-transparent hover:border-[#0086EE] hover:bg-transparent transition-all">Buyurtma
            berish</a>
          <a href="#contact" class="px-[14px] py-3 border border-[#0086EE] rounded-lg font-bold text-sm  text-[#0086EE] hover:bg-white transition-all">Batafsil</a>
        </div>

      </div>
      <div style="background-image: linear-gradient(180deg, #252527 30.75%, rgba(1, 134, 239, 0.00) 615.25%);" class="p-8 pr-9 pb-5 relative overflow-hidden rounded-lg flex flex-col">
        <svg class="absolute bottom-3 right-0 inline-block" xmlns="http://www.w3.org/2000/svg" width="202" height="179" viewBox="0 0 202 179" fill="none">
          <g filter="url(#filter0_f_653_1971)">
            <circle cx="110" cy="110" r="55" fill="#0086EE" fill-opacity="0.3" />
          </g>
          <defs>
            <filter id="filter0_f_653_1971" x="0" y="0" width="220" height="220" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
              <feGaussianBlur stdDeviation="27.5" result="effect1_foregroundBlur_653_1971" />
            </filter>
          </defs>
        </svg>
        <h3 class="text-xl text-white font-bold mb-5 capitalize"><?= $data['xizmatlarimiz']['card_8']['title']  ?></h3>
        <p class="text-sm text-white leading-snug mb-[56px]"><?= $data['xizmatlarimiz']['card_8']['text']  ?></p>
        <div class="flex gap-2 relative z-10 mt-auto">
          <a href="#contact" class="px-[14px] py-3 bg-[#0086EE] rounded-lg font-bold text-sm  text-white border border-transparent hover:border-[#0086EE] hover:bg-transparent transition-all">Buyurtma
            berish</a>
          <a href="#contact" class="px-[14px] py-3 border border-[#0086EE] rounded-lg font-bold text-sm  text-[#0086EE] hover:bg-white transition-all">Batafsil</a>
        </div>

      </div>
      <div style="background-image: linear-gradient(180deg, #252527 30.75%, rgba(1, 134, 239, 0.00) 615.25%);" class="p-8 pr-9 pb-5 relative overflow-hidden rounded-lg flex flex-col">
        <svg class="absolute bottom-3 right-0 inline-block" xmlns="http://www.w3.org/2000/svg" width="202" height="179" viewBox="0 0 202 179" fill="none">
          <g filter="url(#filter0_f_653_1971)">
            <circle cx="110" cy="110" r="55" fill="#0086EE" fill-opacity="0.3" />
          </g>
          <defs>
            <filter id="filter0_f_653_1971" x="0" y="0" width="220" height="220" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
              <feGaussianBlur stdDeviation="27.5" result="effect1_foregroundBlur_653_1971" />
            </filter>
          </defs>
        </svg>
        <h3 class="text-xl text-white font-bold mb-5 capitalize"><?= $data['xizmatlarimiz']['card_9']['title']  ?></h3>
        <p class="text-sm text-white leading-snug mb-[56px]"><?= $data['xizmatlarimiz']['card_9']['text']  ?></p>
        <div class="flex gap-2 relative z-10 mt-auto">
          <a href="#contact" class="px-[14px] py-3 bg-[#0086EE] rounded-lg font-bold text-sm  text-white border border-transparent hover:border-[#0086EE] hover:bg-transparent transition-all">Buyurtma
            berish</a>
          <a href="#contact" class="px-[14px] py-3 border border-[#0086EE] rounded-lg font-bold text-sm  text-[#0086EE] hover:bg-white transition-all">Batafsil</a>
        </div>

      </div>
      <div style="background-image: linear-gradient(180deg, #252527 30.75%, rgba(1, 134, 239, 0.00) 615.25%);" class="p-8 pr-9 pb-5 relative overflow-hidden rounded-lg flex flex-col">
        <svg class="absolute bottom-3 right-0 inline-block" xmlns="http://www.w3.org/2000/svg" width="202" height="179" viewBox="0 0 202 179" fill="none">
          <g filter="url(#filter0_f_653_1971)">
            <circle cx="110" cy="110" r="55" fill="#0086EE" fill-opacity="0.3" />
          </g>
          <defs>
            <filter id="filter0_f_653_1971" x="0" y="0" width="220" height="220" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
              <feGaussianBlur stdDeviation="27.5" result="effect1_foregroundBlur_653_1971" />
            </filter>
          </defs>
        </svg>
        <h3 class="text-xl text-white font-bold mb-5 capitalize"><?= $data['xizmatlarimiz']['card_10']['title']  ?></h3>
        <p class="text-sm text-white leading-snug mb-[56px]"><?= $data['xizmatlarimiz']['card_10']['text']  ?></p>
        <div class="flex gap-2 relative z-10 mt-auto">
          <a href="#contact" class="px-[14px] py-3 bg-[#0086EE] rounded-lg font-bold text-sm  text-white border border-transparent hover:border-[#0086EE] hover:bg-transparent transition-all">Buyurtma
            berish</a>
          <a href="#contact" class="px-[14px] py-3 border border-[#0086EE] rounded-lg font-bold text-sm  text-[#0086EE] hover:bg-white transition-all">Batafsil</a>
        </div>

      </div>
      <div style="background-image: linear-gradient(180deg, #252527 30.75%, rgba(1, 134, 239, 0.00) 615.25%);" class="p-8 pr-9 pb-5 relative overflow-hidden rounded-lg flex flex-col">
        <svg class="absolute bottom-3 right-0 inline-block" xmlns="http://www.w3.org/2000/svg" width="202" height="179" viewBox="0 0 202 179" fill="none">
          <g filter="url(#filter0_f_653_1971)">
            <circle cx="110" cy="110" r="55" fill="#0086EE" fill-opacity="0.3" />
          </g>
          <defs>
            <filter id="filter0_f_653_1971" x="0" y="0" width="220" height="220" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
              <feGaussianBlur stdDeviation="27.5" result="effect1_foregroundBlur_653_1971" />
            </filter>
          </defs>
        </svg>
        <h3 class="text-xl text-white font-bold mb-5 capitalize"><?= $data['xizmatlarimiz']['card_11']['title']  ?></h3>
        <p class="text-sm text-white leading-snug mb-[56px]"><?= $data['xizmatlarimiz']['card_11']['text']  ?></p>
        <div class="flex gap-2 relative z-10 mt-auto">
          <a href="#contact" class="px-[14px] py-3 bg-[#0086EE] rounded-lg font-bold text-sm  text-white border border-transparent hover:border-[#0086EE] hover:bg-transparent transition-all">Buyurtma
            berish</a>
          <a href="#contact" class="px-[14px] py-3 border border-[#0086EE] rounded-lg font-bold text-sm  text-[#0086EE] hover:bg-white transition-all">Batafsil</a>
        </div>

      </div>
      <div style="background-image: linear-gradient(180deg, #252527 30.75%, rgba(1, 134, 239, 0.00) 615.25%);" class="p-8 pr-9 pb-5 relative overflow-hidden rounded-lg flex flex-col">
        <svg class="absolute bottom-3 right-0 inline-block" xmlns="http://www.w3.org/2000/svg" width="202" height="179" viewBox="0 0 202 179" fill="none">
          <g filter="url(#filter0_f_653_1971)">
            <circle cx="110" cy="110" r="55" fill="#0086EE" fill-opacity="0.3" />
          </g>
          <defs>
            <filter id="filter0_f_653_1971" x="0" y="0" width="220" height="220" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
              <feGaussianBlur stdDeviation="27.5" result="effect1_foregroundBlur_653_1971" />
            </filter>
          </defs>
        </svg>
        <h3 class="text-xl text-white font-bold mb-5 capitalize"><?= $data['xizmatlarimiz']['card_12']['title']  ?></h3>
        <p class="text-sm text-white leading-snug mb-[56px]"><?= $data['xizmatlarimiz']['card_12']['text']  ?></p>
        <div class="flex gap-2 relative z-10 mt-auto">
          <a href="#contact" class="px-[14px] py-3 bg-[#0086EE] rounded-lg font-bold text-sm  text-white border border-transparent hover:border-[#0086EE] hover:bg-transparent transition-all">Buyurtma
            berish</a>
          <a href="#contact" class="px-[14px] py-3 border border-[#0086EE] rounded-lg font-bold text-sm  text-[#0086EE] hover:bg-white transition-all">Batafsil</a>
        </div>

      </div>
    </div>


  </div>
</section>



<!-- footer start -->
<footer class="py-16 bg-[#1D1D1D]">
  <div class="max-w-[1322px] mx-auto px-5 lg:flex  items-center gap-40">
    <svg class="flex-shrink-0 mb-8 lg:mb-0" xmlns="http://www.w3.org/2000/svg" width="171" height="56" viewBox="0 0 171 56" fill="none">
      <g clip-path="url(#clip0_616_10014)">
        <path d="M73.2436 4.53853C73.3344 4.89164 73.3786 5.45116 73.3786 6.21708C73.3786 6.95316 73.3344 7.49776 73.2436 7.85088C72.9711 8.91023 72.3428 9.59906 71.3585 9.92234C70.8578 10.0914 70.2148 10.176 69.4293 10.176C68.6267 10.176 67.9763 10.0914 67.4756 9.92234C67.0362 9.76816 66.646 9.517 66.3048 9.16388C65.9637 8.81076 65.7329 8.3731 65.6127 7.85336C65.5071 7.43808 65.4531 6.89597 65.4531 6.21957C65.4531 5.51333 65.5071 4.95382 65.6127 4.54101C65.7329 4.03372 65.9637 3.60599 66.3048 3.25288C66.646 2.89976 67.0338 2.63865 67.4756 2.46955C67.9297 2.31537 68.5801 2.23828 69.4293 2.23828C70.2614 2.23828 70.9045 2.31537 71.3585 2.46955C72.3575 2.82267 72.9858 3.5115 73.2436 4.53853ZM72.8116 37.667H66.0226V13.3267H72.8116V37.667Z" fill="white" />
        <path d="M102.033 26.4642H88.8625L92.0631 20.0235H99.9199C100.617 20.0235 101.228 19.9588 101.758 19.827C102.288 19.6977 102.784 19.4789 103.246 19.1705C103.707 18.8646 104.058 18.4121 104.301 17.8128C104.544 17.2159 104.664 16.4774 104.664 15.6045C104.664 13.9633 104.252 12.8069 103.427 12.1305C102.603 11.4566 101.432 11.1184 99.9199 11.1184H87.0904V37.667H80.2793V4.67773H102.033C104.939 4.67773 107.195 5.48344 108.8 7.09237C110.405 8.70378 111.282 10.7802 111.434 13.3267C111.448 13.6027 111.456 14.8535 111.456 17.0767C111.456 18.8398 111.122 20.4164 110.457 21.804C109.792 23.1916 108.734 24.3156 107.288 25.1735C105.845 26.0339 104.092 26.4642 102.033 26.4642Z" fill="white" />
        <path d="M125.786 13.3267H137.889L134.663 19.8146H128.419C127.86 19.8146 127.366 19.837 126.944 19.8842C126.52 19.9315 126.056 20.0384 125.548 20.2075C125.04 20.3766 124.62 20.6054 124.288 20.8963C123.955 21.1873 123.68 21.5976 123.459 22.1273C123.238 22.657 123.13 23.2886 123.13 24.0247V37.667H116.316V22.7589C116.316 21.4409 116.513 20.2174 116.908 19.0909C117.301 17.9645 117.88 16.9673 118.646 16.0994C119.409 15.234 120.401 14.5551 121.62 14.0627C122.838 13.5729 124.227 13.3267 125.786 13.3267Z" fill="white" />
        <path d="M160.733 37.667H149.879C148.32 37.667 146.926 37.4208 145.701 36.9309C144.474 36.4411 143.483 35.7622 142.727 34.8943C141.968 34.0289 141.394 33.0317 141.001 31.9027C140.608 30.7762 140.412 29.5528 140.412 28.2323V22.7565C140.412 21.4385 140.608 20.215 141.001 19.0885C141.394 17.962 141.973 16.9648 142.739 16.0969C143.502 15.2316 144.494 14.5527 145.714 14.0603C146.931 13.5704 148.32 13.3242 149.881 13.3242H160.735C162.294 13.3242 163.683 13.5704 164.903 14.0603C166.12 14.5502 167.112 15.2291 167.877 16.0969C168.641 16.9648 169.22 17.9595 169.615 19.0885C170.008 20.215 170.207 21.4385 170.207 22.7565V28.2323C170.207 30.0103 169.87 31.5993 169.196 32.9944C168.523 34.3895 167.458 35.5185 166.005 36.3764C164.547 37.2393 162.792 37.667 160.733 37.667ZM163.388 26.9939V24.0247C163.388 23.2886 163.278 22.657 163.059 22.1273C162.838 21.5976 162.564 21.1873 162.23 20.8964C161.896 20.6054 161.476 20.3742 160.971 20.2075C160.463 20.0384 159.999 19.9315 159.574 19.8843C159.149 19.8395 158.659 19.8146 158.099 19.8146H152.513C151.953 19.8146 151.46 19.837 151.037 19.8843C150.613 19.9315 150.149 20.0335 149.641 20.1951C149.133 20.3568 148.718 20.583 148.392 20.874C148.065 21.1649 147.79 21.5802 147.562 22.1149C147.336 22.652 147.221 23.2886 147.221 24.0247V26.9914C147.221 27.7275 147.334 28.3591 147.562 28.8888C147.79 29.4185 148.065 29.8288 148.392 30.1197C148.716 30.4107 149.133 30.637 149.641 30.7986C150.149 30.9603 150.613 31.0622 151.037 31.1095C151.462 31.1542 151.953 31.1791 152.513 31.1791H158.099C158.659 31.1791 159.152 31.1567 159.574 31.1095C159.999 31.0622 160.463 30.9603 160.971 30.7986C161.479 30.637 161.893 30.4107 162.22 30.1197C162.546 29.8288 162.821 29.4185 163.05 28.8888C163.275 28.3616 163.388 27.73 163.388 26.9939Z" fill="white" />
        <path d="M9.10846 15.3465C9.295 14.8789 9.81534 14.6452 10.2817 14.8193L30.0523 22.1626C32.0453 22.9833 32.0085 24.6195 30.0523 27.0342L18.1482 44.0013C17.8488 44.429 17.2597 44.5235 16.8424 44.2077L11.5703 40.2189C11.1555 39.9056 11.0769 39.3088 11.3936 38.896L19.1472 28.7749C20.0504 27.7056 19.9326 26.9919 19.1472 26.512L7.4198 22.1477C6.93136 21.9662 6.68591 21.4092 6.88227 20.9193L9.10846 15.3465Z" fill="#0086EE" />
        <path d="M35.077 31.5202L31.6359 36.6478C31.4175 36.9736 31.4248 37.4013 31.6506 37.7221L36.0662 43.9191C36.3926 44.3767 37.0406 44.4388 37.4456 44.0534L41.9839 39.7389C42.3349 39.4057 42.3741 38.8561 42.0747 38.4731L36.5595 31.463C36.1766 30.9706 35.428 31.0004 35.077 31.5202Z" fill="#0086EE" />
        <path d="M31.6082 13.1804H22.89C22.755 13.1804 22.6445 13.0685 22.6445 12.9317V4.09877C22.6445 3.962 22.755 3.8501 22.89 3.8501H31.6082C31.7432 3.8501 31.8536 3.962 31.8536 4.09877V12.9317C31.8536 13.0685 31.7432 13.1804 31.6082 13.1804Z" fill="#0086EE" />
        <path d="M36.8523 17.2067L44.4023 14.7821C44.876 14.6305 45.384 14.8841 45.5509 15.3591L47.5808 21.1134C47.7526 21.5983 47.5022 22.133 47.0236 22.3071L39.3313 25.1171C38.8355 25.2986 38.2931 25.0251 38.136 24.5153L36.2486 18.3755C36.0988 17.8831 36.3664 17.3609 36.8523 17.2067Z" fill="#0086EE" />
        <path d="M65.9652 42.2998C65.8277 42.2998 65.7197 42.3371 65.6461 42.4142C65.57 42.4913 65.5332 42.6057 65.5332 42.7574V48.6883C65.5332 48.835 65.57 48.9469 65.6461 49.0265C65.7222 49.106 65.8277 49.1458 65.9652 49.1458C66.1149 49.1458 66.2254 49.106 66.299 49.0265C66.3702 48.9469 66.407 48.835 66.407 48.6883V42.7574C66.407 42.6057 66.3702 42.4913 66.2941 42.4142C66.218 42.3371 66.1075 42.2998 65.9652 42.2998Z" fill="white" />
        <path d="M72.5432 42.3672H67.5533C67.4331 42.3672 67.3398 42.3995 67.2711 42.4617C67.2023 42.5239 67.168 42.6184 67.168 42.7377C67.168 42.8596 67.2023 42.9516 67.2711 43.0187C67.3398 43.0859 67.4331 43.1182 67.5533 43.1182H69.6102V48.6885C69.6102 48.8352 69.647 48.9471 69.7231 49.0267C69.7992 49.1063 69.9071 49.1461 70.052 49.1461C70.1968 49.1461 70.3048 49.1063 70.3759 49.0267C70.4471 48.9471 70.4839 48.8352 70.4839 48.6885V43.1182H72.5408C72.666 43.1182 72.7617 43.0859 72.8279 43.0187C72.8942 42.9516 72.9261 42.8596 72.9261 42.7377C72.9261 42.6184 72.8942 42.5239 72.8279 42.4617C72.7641 42.397 72.6684 42.3672 72.5432 42.3672Z" fill="white" />
        <path d="M78.9123 44.5505C78.6497 44.4211 78.3134 44.354 77.906 44.354C77.6679 44.354 77.4126 44.3838 77.1402 44.4435C76.8678 44.5032 76.5929 44.6027 76.318 44.7444C76.2296 44.7767 76.1682 44.8265 76.1339 44.8961C76.0995 44.9657 76.0823 45.0379 76.0872 45.11C76.0897 45.1821 76.1118 45.2492 76.1535 45.3089C76.1952 45.3686 76.2492 45.4084 76.318 45.4233C76.3867 45.4382 76.4677 45.4258 76.5634 45.381C76.8015 45.2617 77.0298 45.1721 77.2507 45.1149C77.4691 45.0578 77.6826 45.0304 77.8888 45.0304C78.2472 45.0304 78.5 45.1149 78.6497 45.2816C78.7994 45.4507 78.8755 45.7217 78.8755 46.0947V46.3708H78.5662C77.8888 46.3708 77.3513 46.413 76.9487 46.5001C76.5487 46.5846 76.264 46.7264 76.0946 46.9228C75.9252 47.1193 75.8418 47.3903 75.8418 47.731C75.8418 47.9971 75.913 48.2383 76.0529 48.4547C76.1928 48.671 76.3916 48.8426 76.6444 48.9694C76.8972 49.0962 77.1819 49.1609 77.4936 49.1609C77.7514 49.1609 77.9796 49.1136 78.1833 49.0241C78.3871 48.9321 78.5564 48.8003 78.6963 48.6287C78.7798 48.5243 78.8411 48.4049 78.8927 48.2756V48.6934C78.8927 48.8401 78.9295 48.9495 79.0007 49.0266C79.0719 49.1037 79.1725 49.141 79.2977 49.141C79.4302 49.141 79.5284 49.1037 79.5996 49.0266C79.6683 48.9495 79.7027 48.8401 79.7027 48.6934V46.1793C79.7027 45.7615 79.6364 45.4158 79.5063 45.1473C79.3738 44.8812 79.1774 44.6822 78.9123 44.5505ZM78.716 47.8827C78.6104 48.0816 78.4656 48.2408 78.284 48.3577C78.1023 48.4745 77.8913 48.5342 77.6532 48.5342C77.3513 48.5342 77.1157 48.4546 76.9438 48.2955C76.772 48.1363 76.6861 47.9349 76.6861 47.6862C76.6861 47.4898 76.7426 47.3356 76.8555 47.2237C76.9684 47.1118 77.1647 47.0347 77.4421 46.99C77.7219 46.9452 78.1023 46.9228 78.5834 46.9228H78.8755V47.1889C78.8755 47.455 78.8215 47.6838 78.716 47.8827Z" fill="white" />
        <path d="M84.3545 44.5554C84.1164 44.4211 83.812 44.3564 83.4439 44.3564C83.061 44.3564 82.7223 44.4485 82.4253 44.6325C82.1946 44.7742 82.0154 44.9732 81.8853 45.2218V44.814C81.8853 44.6673 81.8485 44.5579 81.7773 44.4858C81.7061 44.4136 81.603 44.3763 81.473 44.3763C81.3404 44.3763 81.2373 44.4136 81.1637 44.4858C81.0876 44.5579 81.0508 44.6673 81.0508 44.814V48.6983C81.0508 48.845 81.0876 48.9545 81.1637 49.0315C81.2398 49.1086 81.3429 49.1459 81.473 49.1459C81.7601 49.1459 81.9049 48.9967 81.9049 48.6983V46.4503C81.9049 46.0251 82.0252 45.6869 82.2657 45.4357C82.5063 45.1845 82.8278 45.0602 83.2279 45.0602C83.5715 45.0602 83.8219 45.1547 83.9789 45.3462C84.136 45.5377 84.2146 45.8385 84.2146 46.2513V48.6983C84.2146 48.845 84.2514 48.9545 84.3275 49.0315C84.4036 49.1086 84.5091 49.1459 84.6466 49.1459C84.784 49.1459 84.8895 49.1086 84.9607 49.0315C85.0319 48.9545 85.0687 48.845 85.0687 48.6983V46.2041C85.0687 45.7863 85.0098 45.4382 84.8896 45.1671C84.7717 44.8936 84.5926 44.6897 84.3545 44.5554Z" fill="white" />
        <path d="M90.134 42.2998C89.9965 42.2998 89.891 42.3371 89.8198 42.4092C89.7486 42.4813 89.7118 42.5908 89.7118 42.7375V45.2292C89.6013 45.0054 89.4394 44.8164 89.2234 44.6672C88.9288 44.4608 88.5778 44.3588 88.1704 44.3588C87.763 44.3588 87.4071 44.4558 87.1027 44.6498C86.7984 44.8438 86.5627 45.1198 86.3983 45.4779C86.2314 45.836 86.1504 46.2637 86.1504 46.7585C86.1504 47.2484 86.2338 47.6737 86.4032 48.0392C86.5725 48.4048 86.8082 48.6833 87.1125 48.8773C87.4169 49.0712 87.7679 49.1682 88.1704 49.1682C88.5778 49.1682 88.9288 49.0638 89.2283 48.8549C89.4443 48.7032 89.6038 48.5117 89.7118 48.2854V48.7032C89.7118 48.8499 89.7486 48.9593 89.8247 49.0364C89.9008 49.1135 90.0039 49.1508 90.134 49.1508C90.2714 49.1508 90.3794 49.1135 90.453 49.0364C90.5291 48.9593 90.566 48.8499 90.566 48.7032V42.7424C90.566 42.5957 90.5291 42.4863 90.453 42.4142C90.3794 42.3371 90.2714 42.2998 90.134 42.2998ZM89.0859 48.278C88.8822 48.4122 88.6417 48.4769 88.3668 48.4769C87.9593 48.4769 87.6329 48.3302 87.385 48.0343C87.1371 47.7383 87.0143 47.3131 87.0143 46.7536C87.0143 46.3781 87.0708 46.0647 87.1837 45.8111C87.2966 45.5574 87.4537 45.366 87.6574 45.2342C87.8611 45.1049 88.0968 45.0402 88.3668 45.0402C88.7791 45.0402 89.1105 45.1869 89.3535 45.4779C89.5989 45.7688 89.7192 46.1941 89.7192 46.7536C89.7192 47.1291 89.6652 47.4424 89.5547 47.6961C89.4467 47.9522 89.2896 48.1462 89.0859 48.278Z" fill="white" />
        <path d="M100.857 42.4092C100.788 42.3371 100.69 42.2998 100.565 42.2998C100.452 42.2998 100.364 42.3222 100.302 42.3669C100.238 42.4117 100.18 42.4888 100.123 42.5957L97.7496 47.1067L95.3761 42.5957C95.3197 42.4888 95.2583 42.4117 95.192 42.3669C95.1258 42.3222 95.0374 42.2998 94.9245 42.2998C94.7993 42.2998 94.7012 42.3371 94.6275 42.4092C94.5563 42.4813 94.5195 42.5858 94.5195 42.7176V48.7256C94.5195 48.8524 94.5539 48.9544 94.6226 49.0314C94.6913 49.1085 94.7895 49.1458 94.9147 49.1458C95.0472 49.1458 95.1454 49.1085 95.2117 49.0314C95.278 48.9544 95.3099 48.8549 95.3099 48.7256V44.0082L97.3692 47.8701C97.4133 47.9472 97.4649 48.0069 97.5238 48.0517C97.5827 48.0964 97.6563 48.1188 97.7447 48.1188C97.838 48.1188 97.9116 48.0989 97.9656 48.0566C98.0196 48.0144 98.0711 47.9547 98.1202 47.8701L100.17 43.9883V48.7281C100.17 48.8549 100.202 48.9568 100.268 49.0339C100.334 49.111 100.432 49.1483 100.565 49.1483C100.697 49.1483 100.796 49.111 100.862 49.0339C100.928 48.9568 100.96 48.8574 100.96 48.7281V42.7201C100.96 42.5858 100.926 42.4813 100.857 42.4092Z" fill="white" />
        <path d="M107.163 48.7206L106.532 48.0342C106.6 47.9149 106.667 47.7855 106.726 47.6463C106.802 47.4648 106.866 47.2683 106.917 47.0569C106.969 46.8456 107.003 46.6193 107.023 46.3805C107.032 46.286 107.013 46.2114 106.966 46.1592C106.92 46.107 106.851 46.0796 106.762 46.0796C106.677 46.0796 106.613 46.102 106.564 46.1468C106.517 46.1915 106.485 46.2612 106.473 46.3507C106.458 46.5372 106.434 46.7138 106.399 46.8804C106.365 47.047 106.321 47.2036 106.272 47.3454C106.235 47.4498 106.193 47.5418 106.149 47.6314L105.037 46.3805C105.258 46.2363 105.44 46.0995 105.575 45.9702C105.729 45.8235 105.842 45.6718 105.911 45.5201C105.979 45.3684 106.014 45.2018 106.014 45.0253C106.014 44.7045 105.908 44.4533 105.695 44.2668C105.484 44.0803 105.206 43.9883 104.868 43.9883C104.612 43.9883 104.391 44.0355 104.2 44.1325C104.009 44.227 103.861 44.3613 103.758 44.5304C103.655 44.6995 103.604 44.8959 103.604 45.1197C103.604 45.3212 103.65 45.5127 103.741 45.6967C103.827 45.8683 103.969 46.0622 104.168 46.2811L104.07 46.3432C103.901 46.4527 103.751 46.5645 103.621 46.6789C103.491 46.7933 103.383 46.9127 103.297 47.0321C103.208 47.1539 103.145 47.2832 103.103 47.4225C103.061 47.5617 103.039 47.7085 103.039 47.8651C103.039 48.1287 103.103 48.355 103.233 48.549C103.363 48.7429 103.55 48.8922 103.79 48.9991C104.033 49.106 104.32 49.1607 104.657 49.1607C104.976 49.1607 105.278 49.0936 105.557 48.9568C105.8 48.8374 106.011 48.6783 106.193 48.4769L106.635 48.9668C106.691 49.0289 106.743 49.0737 106.789 49.1035C106.836 49.1334 106.897 49.1458 106.974 49.1458C107.059 49.1458 107.126 49.1234 107.177 49.0811C107.229 49.0389 107.256 48.9842 107.258 48.917C107.261 48.8548 107.229 48.7877 107.163 48.7206ZM104.387 44.6522C104.509 44.5354 104.669 44.4782 104.868 44.4782C105.042 44.4782 105.184 44.5304 105.292 44.6348C105.4 44.7393 105.454 44.8835 105.454 45.065C105.454 45.1794 105.425 45.2888 105.368 45.3908C105.312 45.4928 105.221 45.5972 105.093 45.7066C104.99 45.7937 104.848 45.8956 104.684 46.0025C104.571 45.8757 104.477 45.7638 104.411 45.6768C104.333 45.5748 104.279 45.4778 104.249 45.3908C104.22 45.3038 104.202 45.2118 104.202 45.1148C104.202 44.9233 104.264 44.7691 104.387 44.6522ZM105.383 48.4744C105.179 48.5813 104.946 48.636 104.684 48.636C104.36 48.636 104.109 48.5639 103.935 48.4222C103.761 48.2779 103.672 48.0815 103.672 47.8278C103.672 47.6761 103.699 47.5394 103.751 47.42C103.802 47.3006 103.886 47.1862 104.001 47.0719C104.117 46.9599 104.269 46.8406 104.458 46.7187L104.522 46.6765L105.832 48.1039C105.697 48.2605 105.548 48.3849 105.383 48.4744Z" fill="white" />
        <path d="M115.505 42.4092C115.437 42.3371 115.338 42.2998 115.213 42.2998C115.1 42.2998 115.012 42.3222 114.951 42.3669C114.887 42.4117 114.828 42.4888 114.771 42.5957L112.398 47.1067L110.025 42.5957C109.968 42.4888 109.907 42.4117 109.84 42.3669C109.774 42.3222 109.686 42.2998 109.573 42.2998C109.448 42.2998 109.35 42.3371 109.276 42.4092C109.205 42.4813 109.168 42.5858 109.168 42.7176V48.7256C109.168 48.8524 109.202 48.9544 109.271 49.0314C109.34 49.1085 109.438 49.1458 109.563 49.1458C109.696 49.1458 109.794 49.1085 109.86 49.0314C109.926 48.9544 109.958 48.8549 109.958 48.7256V44.0082L112.018 47.8701C112.062 47.9472 112.113 48.0069 112.172 48.0517C112.231 48.0964 112.305 48.1188 112.393 48.1188C112.486 48.1188 112.56 48.0989 112.614 48.0566C112.668 48.0144 112.72 47.9547 112.769 47.8701L114.818 43.9883V48.7281C114.818 48.8549 114.85 48.9568 114.916 49.0339C114.983 49.111 115.081 49.1483 115.213 49.1483C115.346 49.1483 115.444 49.111 115.51 49.0339C115.577 48.9568 115.608 48.8574 115.608 48.7281V42.7201C115.611 42.5858 115.574 42.4813 115.505 42.4092Z" fill="white" />
        <path d="M124.614 45.5552H122.95C122.837 45.5552 122.749 45.5826 122.683 45.6398C122.617 45.697 122.585 45.779 122.585 45.8885C122.585 45.9954 122.617 46.0824 122.683 46.1446C122.749 46.2092 122.837 46.2391 122.95 46.2391H124.229V48.1216C124.03 48.1912 123.827 48.2509 123.613 48.2956C123.333 48.3528 123.049 48.3827 122.754 48.3827C121.959 48.3827 121.357 48.1564 120.955 47.7063C120.55 47.2562 120.349 46.5947 120.349 45.7268C120.349 45.1623 120.435 44.6824 120.606 44.2845C120.778 43.8891 121.036 43.5857 121.382 43.3793C121.726 43.1729 122.145 43.071 122.641 43.071C122.972 43.071 123.279 43.1132 123.557 43.1953C123.836 43.2774 124.104 43.4141 124.359 43.6056C124.448 43.6628 124.531 43.6877 124.607 43.6777C124.686 43.6678 124.752 43.6355 124.803 43.5783C124.857 43.5211 124.892 43.4539 124.911 43.3793C124.931 43.3022 124.929 43.2276 124.907 43.1505C124.884 43.0735 124.835 43.0088 124.762 42.9516C124.462 42.7178 124.129 42.5463 123.765 42.4418C123.402 42.3374 123.026 42.2852 122.639 42.2852C122.138 42.2852 121.689 42.3647 121.291 42.5239C120.894 42.683 120.555 42.9118 120.275 43.2152C119.995 43.5161 119.784 43.8792 119.642 44.2994C119.497 44.7222 119.426 45.1996 119.426 45.7318C119.426 46.443 119.553 47.0547 119.806 47.5695C120.059 48.0843 120.432 48.4796 120.925 48.7557C121.416 49.0317 122.018 49.171 122.725 49.171C123.076 49.171 123.431 49.1362 123.795 49.0665C124.158 48.9969 124.472 48.9074 124.735 48.8004C124.823 48.7681 124.884 48.7159 124.924 48.6438C124.961 48.5717 124.98 48.4846 124.98 48.3827V45.9357C124.98 45.8163 124.948 45.7218 124.882 45.6597C124.816 45.5876 124.725 45.5552 124.614 45.5552Z" fill="white" />
        <path d="M128.757 44.3464C128.337 44.3712 127.988 44.4831 127.713 44.6796C127.507 44.8263 127.353 45.0253 127.245 45.2739V44.8139C127.245 44.6672 127.208 44.5578 127.137 44.4856C127.066 44.4135 126.962 44.3762 126.832 44.3762C126.702 44.3762 126.597 44.4135 126.523 44.4856C126.449 44.5578 126.41 44.6672 126.41 44.8139V48.6982C126.41 48.8449 126.447 48.9543 126.523 49.0314C126.599 49.1085 126.707 49.1458 126.852 49.1458C126.989 49.1458 127.095 49.1085 127.166 49.0314C127.237 48.9543 127.274 48.8449 127.274 48.6982V46.4701C127.274 46.0697 127.385 45.7564 127.608 45.5276C127.831 45.2988 128.148 45.162 128.563 45.1173L128.732 45.1073C128.865 45.0949 128.96 45.0526 129.024 44.978C129.088 44.9059 129.115 44.8089 129.108 44.6871C129.103 44.5602 129.066 44.4707 129.005 44.416C128.938 44.3638 128.857 44.3414 128.757 44.3464Z" fill="white" />
        <path d="M132.894 44.6524C132.563 44.4559 132.17 44.3564 131.718 44.3564C131.38 44.3564 131.075 44.4112 130.803 44.5231C130.53 44.635 130.297 44.7941 130.103 45.003C129.909 45.2119 129.76 45.4655 129.657 45.759C129.553 46.0549 129.502 46.3856 129.502 46.7537C129.502 47.2436 129.593 47.6688 129.774 48.0294C129.956 48.3924 130.214 48.671 130.545 48.8674C130.876 49.0639 131.269 49.1633 131.721 49.1633C132.059 49.1633 132.364 49.1086 132.636 48.9967C132.909 48.8848 133.142 48.7257 133.336 48.5168C133.53 48.3079 133.679 48.0542 133.783 47.7558C133.886 47.4574 133.937 47.1242 133.937 46.7562C133.937 46.2688 133.846 45.8435 133.665 45.4854C133.483 45.1249 133.225 44.8488 132.894 44.6524ZM132.906 47.6986C132.796 47.9523 132.639 48.1463 132.435 48.2805C132.231 48.4148 131.991 48.4795 131.716 48.4795C131.308 48.4795 130.982 48.3328 130.734 48.0368C130.486 47.7409 130.363 47.3157 130.363 46.7562C130.363 46.3807 130.42 46.0673 130.533 45.8137C130.646 45.56 130.803 45.3686 131.007 45.2368C131.21 45.1074 131.446 45.0428 131.716 45.0428C132.128 45.0428 132.457 45.1895 132.703 45.4805C132.948 45.7714 133.068 46.1966 133.068 46.7562C133.071 47.1292 133.017 47.445 132.906 47.6986Z" fill="white" />
        <path d="M138.542 44.3765C138.405 44.3765 138.299 44.4138 138.228 44.4859C138.157 44.558 138.12 44.6674 138.12 44.8141V47.0696C138.12 47.4874 138.002 47.8256 137.767 48.0792C137.531 48.3329 137.227 48.4597 136.851 48.4597C136.512 48.4597 136.264 48.3652 136.107 48.1787C135.95 47.9922 135.872 47.7012 135.872 47.3083V44.8141C135.872 44.6674 135.835 44.558 135.759 44.4859C135.683 44.4138 135.577 44.3765 135.44 44.3765C135.302 44.3765 135.197 44.4138 135.126 44.4859C135.054 44.558 135.018 44.6674 135.018 44.8141V47.3083C135.018 47.7211 135.076 48.0643 135.197 48.3379C135.315 48.6114 135.499 48.8178 135.747 48.9571C135.994 49.0963 136.304 49.1659 136.672 49.1659C137.047 49.1659 137.376 49.069 137.654 48.875C137.855 48.7357 138.017 48.5467 138.137 48.3155V48.6984C138.137 48.8452 138.174 48.9546 138.245 49.0317C138.316 49.1088 138.422 49.1461 138.559 49.1461C138.834 49.1461 138.974 48.9968 138.974 48.6984V44.8141C138.974 44.6674 138.937 44.558 138.861 44.4859C138.785 44.4138 138.68 44.3765 138.542 44.3765Z" fill="white" />
        <path d="M144.508 45.4755C144.339 45.1174 144.103 44.8414 143.804 44.6474C143.505 44.4534 143.149 44.3564 142.741 44.3564C142.329 44.3564 141.973 44.4609 141.678 44.6698C141.462 44.8215 141.3 45.0129 141.19 45.2417V44.814C141.19 44.6673 141.153 44.5579 141.082 44.4858C141.011 44.4136 140.905 44.3763 140.768 44.3763C140.635 44.3763 140.532 44.4136 140.459 44.4858C140.385 44.5579 140.346 44.6673 140.346 44.814V50.4216C140.346 50.5609 140.383 50.6703 140.459 50.7449C140.535 50.822 140.638 50.8593 140.768 50.8593C140.905 50.8593 141.013 50.822 141.087 50.7449C141.163 50.6678 141.2 50.5609 141.2 50.4216V48.283C141.31 48.5068 141.472 48.6958 141.688 48.85C141.983 49.0589 142.334 49.1633 142.741 49.1633C143.149 49.1633 143.505 49.0664 143.809 48.8724C144.113 48.6784 144.349 48.3999 144.513 48.0344C144.68 47.6688 144.761 47.2436 144.761 46.7537C144.761 46.2613 144.678 45.8336 144.508 45.4755ZM143.728 47.6986C143.615 47.9523 143.458 48.1463 143.254 48.2805C143.051 48.4148 142.815 48.4795 142.545 48.4795C142.133 48.4795 141.801 48.3328 141.558 48.0368C141.313 47.7409 141.192 47.3157 141.192 46.7562C141.192 46.3807 141.246 46.0673 141.357 45.8137C141.467 45.56 141.622 45.3686 141.826 45.2368C142.029 45.1074 142.27 45.0428 142.545 45.0428C142.957 45.0428 143.289 45.1895 143.532 45.4805C143.777 45.7714 143.897 46.1966 143.897 46.7562C143.897 47.1292 143.841 47.445 143.728 47.6986Z" fill="white" />
      </g>
      <defs>
        <clipPath id="clip0_616_10014">
          <rect width="171" height="56" fill="white" />
        </clipPath>
      </defs>
    </svg>

    <div class="flex md:gap-28 gap-8 flex-col md:flex-row">
      <div class="md:max-w-[252px]">
        <h3 class="text-xl text-white font-bold mb-7">Bog’laning</h3>
        <ul class="flex flex-col gap-7">
          <li class="flex gap-5 items-center"><svg xmlns="http://www.w3.org/2000/svg" height="25" width="24" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
              <path d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z" />
            </svg>
            <span>
              <a class="text-white text-base font-semibold hover:text-[#0086EE] transition-all" href="tel:+998905463326">+99890 546 33 26 </a> <br>
              <a class="text-white text-base font-semibold hover:text-[#0086EE] transition-all" href="tel:+998935533352">+99893 553 33 52</a>
            </span>
          </li>
          <li class="flex gap-5 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
              <g clip-path="url(#clip0_616_9994)">
                <path d="M12.25 1.9502C6.73 1.9502 2.25 6.4302 2.25 11.9502C2.25 17.4702 6.73 21.9502 12.25 21.9502H17.25V19.9502H12.25C7.91 19.9502 4.25 16.2902 4.25 11.9502C4.25 7.6102 7.91 3.9502 12.25 3.9502C16.59 3.9502 20.25 7.6102 20.25 11.9502V13.3802C20.25 14.1702 19.54 14.9502 18.75 14.9502C17.96 14.9502 17.25 14.1702 17.25 13.3802V11.9502C17.25 9.1902 15.01 6.9502 12.25 6.9502C9.49 6.9502 7.25 9.1902 7.25 11.9502C7.25 14.7102 9.49 16.9502 12.25 16.9502C13.63 16.9502 14.89 16.3902 15.79 15.4802C16.44 16.3702 17.56 16.9502 18.75 16.9502C20.72 16.9502 22.25 15.3502 22.25 13.3802V11.9502C22.25 6.4302 17.77 1.9502 12.25 1.9502ZM12.25 14.9502C10.59 14.9502 9.25 13.6102 9.25 11.9502C9.25 10.2902 10.59 8.9502 12.25 8.9502C13.91 8.9502 15.25 10.2902 15.25 11.9502C15.25 13.6102 13.91 14.9502 12.25 14.9502Z" fill="white" />
              </g>
              <defs>
                <clipPath id="clip0_616_9994">
                  <rect width="24" height="24" fill="white" transform="translate(0.25)" />
                </clipPath>
              </defs>
            </svg><a class="text-white text-base font-semibold hover:text-[#0086EE] transition-all" href="mailto:iPro_group@bk.ru">iPro_group@bk.ru</a>
          </li>


          <li class="flex gap-5 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0" height="25" width="22 " viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
              <path fill="#ffffff" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
            </svg>
            <a class="text-white text-base font-semibold hover:text-[#0086EE] transition-all" href="tel:+998902252025">O'zbekiston, Andijan shaxar,
              A.Fitrat ko'chasi 8</a>
          </li>
        </ul>
      </div>
      <div class="md:max-w-[249px]">
        <h3 class="text-xl text-white font-bold mb-7">Linklar</h3>
        <ul class="flex flex-col gap-4">
          <li><a class="text-base font-semibold text-white hover:text-[#0086EE] transition-all" href="/news/">Yangiliklar</a></li>
          <li><a class="text-base font-semibold text-white hover:text-[#0086EE] transition-all" href="/services/">Xizmatlar</a></li>
          <li><a class="text-base font-semibold text-white hover:text-[#0086EE] transition-all" href="/employees/">Hodimlar</a></li>
          <li><a class="text-base font-semibold text-white hover:text-[#0086EE] transition-all" href="/elonlar/">Vakansiya</a></li>
        </ul>
      </div>
      <div>
        <h3 class="text-xl text-white font-bold mb-7">Ijtimoiy tarmoqlar</h3>
        <ul class="flex gap-4 items-center">
          <li><a href="#" class="bg-white social-hover  w-10 h-10 rounded-full flex items-center justify-center text-xl pt-[2px]"><i class="fa-brands fa-youtube"></i></a></li>
          <li><a href="#" class="bg-white w-10 social-hover  h-10 rounded-full flex items-center justify-center text-xl pt-[2px]">
              <i class="fa-brands fa-instagram"></i></a></li>
          <li><a href="#" class="bg-white social-hover w-10 h-10 rounded-full flex items-center justify-center text-xl pt-[2px]"><i class="fa-brands fa-facebook-f"></i></a></li>
          <li><a href="#" class="bg-white social-hover  w-10 h-10 rounded-full flex items-center justify-center  text-xl pt-[2px]">
              <i class="fa-brands fa-whatsapp"></i>
            </a></li>
          <li><a href="#" class="bg-white social-hover  w-10 h-10 rounded-full flex items-center justify-center text-xl pt-[2px]"><i class="fa-brands fa-tiktok"></i></a></li>
          <li><a href="#" class="bg-white social-hover  w-10 h-10 rounded-full flex items-center justify-center text-xl pt-[2px]"><i class="fa-brands fa-telegram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!-- footer end -->

<?php
get_footer();
