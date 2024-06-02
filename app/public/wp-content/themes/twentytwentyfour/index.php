<?php
// Template name: Index

get_header();
?>

<section id="hero" class="bg-[#DCE9E2] lg:pb-14 md:pb-[100px] pb-[252px] pt-10 md:pt-0">
    <div class="max-w-[1180px] px-5 mx-auto md:flex items-center justify-between gap-12 relative">
      <div class="text-center md:text-left mb-[60px] md:mb-0 wow animate__animated animate__fadeInLeft">
        <p class="text-[#00856F] text-sm font-bold leading-5 mb-4 ">BOAS-VINDAS A DOCTORCARE 👋</p>
        <h1 class="text-[#212529] md:text-[52px] text-4xl font-bold leading-[44.2px] md:leading-[67.6px] mb-6 ">
          Assistência médica simplificada para
          todos</h1>
        <p class="text-[#495057] text-lg leading-7 mb-8 ">Os médicos da DoctorCare vão além dos sintomas para tratar a
          causa <br class="lg:block md:hidden"> raiz de sua doença e proporcionar uma cura a longo prazo.</p>
        <a
          class="btn_hover cursor-pointer items-center inline-flex gap-2 rounded-full text-white font-bold text-base leading-5 py-4 px-8 bg-[#00856F] border-[#00856F] border"><span>
            <svg class="flex" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M13.8337 11.6667C13.667 11.5833 12.5837 11.0833 12.417 11C12.2503 10.9167 12.0837 10.9167 11.917 11.0833C11.7503 11.25 11.417 11.75 11.2503 11.9167C11.167 12.0833 11.0003 12.0833 10.8337 12C10.2503 11.75 9.66699 11.4167 9.16699 11C8.75033 10.5833 8.33366 10.0833 8.00033 9.58334C7.91699 9.41668 8.00033 9.25001 8.08366 9.16668C8.16699 9.08334 8.25033 8.91668 8.41699 8.83334C8.50033 8.75001 8.58366 8.58334 8.58366 8.50001C8.66699 8.41668 8.66699 8.25001 8.58366 8.16668C8.50033 8.08334 8.08366 7.08334 7.91699 6.66668C7.83366 6.08334 7.66699 6.08334 7.50033 6.08334C7.41699 6.08334 7.25033 6.08334 7.08366 6.08334C6.91699 6.08334 6.66699 6.25001 6.58366 6.33334C6.08366 6.83334 5.83366 7.41668 5.83366 8.08334C5.91699 8.83334 6.16699 9.58334 6.66699 10.25C7.58366 11.5833 8.75033 12.6667 10.167 13.3333C10.5837 13.5 10.917 13.6667 11.3337 13.75C11.7503 13.9167 12.167 13.9167 12.667 13.8333C13.2503 13.75 13.7503 13.3333 14.0837 12.8333C14.2503 12.5 14.2503 12.1667 14.167 11.8333C14.167 11.8333 14.0003 11.75 13.8337 11.6667ZM15.917 4.08334C12.667 0.833344 7.41699 0.833344 4.16699 4.08334C1.50033 6.75001 1.00033 10.8333 2.83366 14.0833L1.66699 18.3333L6.08366 17.1667C7.33366 17.8333 8.66699 18.1667 10.0003 18.1667C14.5837 18.1667 18.2503 14.5 18.2503 9.91668C18.3337 7.75001 17.417 5.66668 15.917 4.08334ZM13.667 15.75C12.5837 16.4167 11.3337 16.8333 10.0003 16.8333C8.75033 16.8333 7.58366 16.5 6.50033 15.9167L6.25033 15.75L3.66699 16.4167L4.33366 13.9167L4.16699 13.6667C2.16699 10.3333 3.16699 6.16668 6.41699 4.08334C9.66699 2.00001 13.8337 3.08334 15.8337 6.25001C17.8337 9.50001 16.917 13.75 13.667 15.75Z"
                fill="currentColor" />
            </svg>
          </span>Agende sua consulta</a>
      </div>
      <div class="wow animate__animated animate__fadeInRight">
        <img class="max-w-[420px] md:flex hidden" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/hero.png" alt="hero">
        <img class="max-w-[261.64px] w-full flex md:hidden mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/hero.png" alt="hero">
      </div>


      <div
        class="wow animate__animated animate__fadeInUp  max-w-[1180px] w-full   px-5 mx-auto   justify-between items-center absolute lg:bottom-[-157px] md:bottom-[-200px] bottom-[-486px] left-0">
        <div
          class="bg-[#FFFAF1] w-full grid md:grid-cols-3 grid-cols-1 border border-[#DCE9E2] text-center rounded-md py-14 md:gap-0 gap-[60px]">
          <div class="lg:pr-[100px] lg:pl-[120px] lg:border-r-[#00856F] lg:border-r ">
            <h3 class="text-[#212529] font-bold text-5xl leading-[62.4px] mb-1">+3.500</h3>
            <p class="text-[#00856F] text-base leading-6">Pacientes atendidos</p>
          </div>
          <div class="lg:px-[100px]">
            <h3 class="text-[#212529] font-bold text-5xl leading-[62.4px] mb-1">+15</h3>
            <p class="text-[#00856F] text-base leading-6">Especialistas disponíveis</p>
          </div>
          <div class="lg:pr-[120px] lg:pl-[100px] lg:border-l-[#00856F] lg:border-l ">
            <h3 class="text-[#212529] font-bold text-5xl leading-[62.4px] mb-1">+10</h3>
            <p class="text-[#00856F] text-base leading-6">Anos no mercado</p>
          </div>
        </div>
      </div>
    </div>


  </section>

  <section id="Serviços" class="md:pt-64 pt-[318px] md:pb-40 pb-14 bg-[#F7F9F9]">
    <div class="max-w-[1180px] px-5 mx-auto wow animate__animated animate__fadeIn">
      <div class="text-center mb-16">
        <p class="text-[#00856F] font-bold text-sm leading-5 mb-4">SERVIÇOS</p>
        <h2 class="text-[#212529] font-bold md:text-[40px] text-3xl leading-9 md:leading-[52.08px]">Como podemos <br
            class="md:hidden block"> ajudá-lo <br class="md:block hidden"> a se sentir
          melhor?</h2>
      </div>
      <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-10 ">
        <div class="wow animate__animated animate__fadeInTopLeft p-6 bg-white rounded-md border-[#DCE9E2] border">
          <img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/check-mark.svg" alt="check-mark">
          <h3 class="text-[#212529] font-bold text-2xl leading-8 mb-4">Problemas digestivos</h3>
          <p class="text-[#212529]" >Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis
            enim.</p>
        </div>
        <div class="wow animate__animated animate__fadeInDown p-6 bg-white rounded-md border-[#DCE9E2] border">
          <img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/check-mark.svg" alt="check-mark">
          <h3 class="text-[#212529] font-bold text-2xl leading-8 mb-4">Saúde Hormonal</h3>
          <p class="text-[#212529]" >Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis
            enim.</p>
        </div>

        <div class="wow animate__animated animate__fadeInTopRight  p-6 bg-white rounded-md border-[#DCE9E2] border">
          <img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/check-mark.svg" alt="check-mark">
          <h3 class="text-[#212529] font-bold text-2xl leading-8 mb-4">Bem-estar mental</h3>
          <p class="text-[#212529]" >Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis
            enim.</p>
        </div>

        <div class="wow animate__animated animate__fadeInBottomLeft p-6 bg-white rounded-md border-[#DCE9E2] border">
          <img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/check-mark.svg" alt="check-mark">
          <h3 class="text-[#212529] font-bold text-2xl leading-8 mb-4">Cuidados Pediátricos</h3>
          <p class="text-[#212529]" >Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis
            enim.</p>
        </div>

        <div class="wow animate__animated animate__fadeInUp p-6 bg-white rounded-md border-[#DCE9E2] border">
          <img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/check-mark.svg" alt="check-mark">
          <h3 class="text-[#212529] font-bold text-2xl leading-8 mb-4">Autoimune e Inflamação</h3>
          <p class="text-[#212529]" >Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis
            enim.</p>
        </div>

        <div class="wow animate__animated animate__fadeInBottomRight p-6 bg-white rounded-md border-[#DCE9E2] border">
          <img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/check-mark.svg" alt="check-mark">
          <h3 class="text-[#212529] font-bold text-2xl leading-8 mb-4">Saúde do Coração</h3>
          <p class="text-[#212529]" >Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis
            enim.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="Sobre" class="bg-[#FFFAF1] md:py-40 py-[100px]">
    <div class="max-w-[1180px] px-5 mx-auto md:flex items-center justify-between gap-16">
      <div class="wow animate__animated animate__backInLeft">
        <img class="max-w-[480px] w-full md:mb-0 md:flex hidden" src="<?php echo get_template_directory_uri(); ?>/assets/img/Pic.png" alt="picture">
      </div>
      <div class="md:mb-0 mb-16 wow animate__animated animate__backInRight">
        <p class="text-[#00856F] font-bold text-sm leading-5 mb-3 uppercase">SOBRE NÓS</p>
        <h2 class="text-[#212529] font-bold text-[30px] md:text-[40px] leading-10 md:leading-[52.08px] mb-6">Entenda
          quem somos <br> e por que
          existimos</h2>
        <p class="max-w-[573px] text-[#495057] text-base leading-6">Amet minim mollit non deserunt ullamco est sit
          aliqua dolor do amet sint. Velit officia consequat duis enim.
          Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim.
          Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim.
          Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim.
          Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
      </div>

      <div>
        <img class="max-w-[480px] w-full md:mb-0 md:hidden flex" src="<?php echo get_template_directory_uri(); ?>/assets/img/Pic.png" alt="picture">
      </div>
    </div>
  </section>

  <section id="Depoimentos" class="md:py-40 py-[100px] bg-white">
    <div class="max-w-[1180px] px-5 mx-auto md:flex items-center justify-between">
      <div class="md:mb-0 mb-16 wow animate__animated animate__backInLeft">
        <h3 class="text-[#212529] font-bold text-[30px] md:text-[40px] leading-10 md:leading-[52.08px] mb-10">Entre em
          contato <br> com a gente!</h3>
        <ul class="flex flex-col gap-4 mb-10">
          <li><a class="flex items-center gap-2 text-[#212529]" href="#"><span><img class="flex" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/map.svg"></span>R.
              Amauri Souza, 346</a></li>
          <li><a class="flex items-center gap-2 text-[#212529]" href="#"><span><img class="flex"
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/mail.svg"></span>contato@doctorcare.com</a></li>
        </ul>
        <button
          class="btn_hover flex items-center gap-2 rounded-full text-white font-bold text-base leading-5 py-4 px-8 bg-[#00856F] border-[#00856F] border"><span>
            <svg class="flex" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M13.8337 11.6667C13.667 11.5833 12.5837 11.0833 12.417 11C12.2503 10.9167 12.0837 10.9167 11.917 11.0833C11.7503 11.25 11.417 11.75 11.2503 11.9167C11.167 12.0833 11.0003 12.0833 10.8337 12C10.2503 11.75 9.66699 11.4167 9.16699 11C8.75033 10.5833 8.33366 10.0833 8.00033 9.58334C7.91699 9.41668 8.00033 9.25001 8.08366 9.16668C8.16699 9.08334 8.25033 8.91668 8.41699 8.83334C8.50033 8.75001 8.58366 8.58334 8.58366 8.50001C8.66699 8.41668 8.66699 8.25001 8.58366 8.16668C8.50033 8.08334 8.08366 7.08334 7.91699 6.66668C7.83366 6.08334 7.66699 6.08334 7.50033 6.08334C7.41699 6.08334 7.25033 6.08334 7.08366 6.08334C6.91699 6.08334 6.66699 6.25001 6.58366 6.33334C6.08366 6.83334 5.83366 7.41668 5.83366 8.08334C5.91699 8.83334 6.16699 9.58334 6.66699 10.25C7.58366 11.5833 8.75033 12.6667 10.167 13.3333C10.5837 13.5 10.917 13.6667 11.3337 13.75C11.7503 13.9167 12.167 13.9167 12.667 13.8333C13.2503 13.75 13.7503 13.3333 14.0837 12.8333C14.2503 12.5 14.2503 12.1667 14.167 11.8333C14.167 11.8333 14.0003 11.75 13.8337 11.6667ZM15.917 4.08334C12.667 0.833344 7.41699 0.833344 4.16699 4.08334C1.50033 6.75001 1.00033 10.8333 2.83366 14.0833L1.66699 18.3333L6.08366 17.1667C7.33366 17.8333 8.66699 18.1667 10.0003 18.1667C14.5837 18.1667 18.2503 14.5 18.2503 9.91668C18.3337 7.75001 17.417 5.66668 15.917 4.08334ZM13.667 15.75C12.5837 16.4167 11.3337 16.8333 10.0003 16.8333C8.75033 16.8333 7.58366 16.5 6.50033 15.9167L6.25033 15.75L3.66699 16.4167L4.33366 13.9167L4.16699 13.6667C2.16699 10.3333 3.16699 6.16668 6.41699 4.08334C9.66699 2.00001 13.8337 3.08334 15.8337 6.25001C17.8337 9.50001 16.917 13.75 13.667 15.75Z"
                fill="currentColor" />
            </svg>
          </span>Agende sua consulta</button>
      </div>
      <div class="wow animate__animated animate__backInRight">
        <img class="max-w-[575px] w-full flex" src="<?php echo get_template_directory_uri(); ?>/assets/img/man-with-phone.png" alt="man-with-phone">
      </div>
    </div>
  </section>

<?php

get_footer()

?>
