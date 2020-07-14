<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package namakemono-community
 */

get_header();
?>

	<main class="online-lesson__main">
    <h2 class="online-lesson__online-lessonHeading">
      <span class="sr-only">「脳トレ」オンラインレッスンご案内</span>
      <svg data-trigger id="レイヤー_1" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 579.7 43.2" class="online-lesson__headerSvg -pc"><path class="cls-1 svg-online-lesson-heading-1" d="M13.11,6.24s-3.41,0-7.69-.19c-.19,9-.57,27.46-.57,36.48l-3.51.24C.14,29.38,0,.43,0,.43,7.39,0,13.11,0,13.11,0Z"></path><path class="cls-1 svg-online-lesson-heading-2" d="M19.39,41.33s2.54-8.45,2.06-30.14h6.1v.62h1.39v-.62H35s0,2.06-.33,29.28c-4.61.53-8.45.67-8.45.67V35.86s1.05,0,3.26.1l-.14-6.44H25.92C23.52,40.23,19.39,41.33,19.39,41.33Zm7-14.16h2.93c0-2-.05-3.74-.1-5.33H27.07Q26.78,24.8,26.35,27.17Zm.91-7.68h1.88c-.05-2.35-.1-4.08-.15-5.33H27.5C27.46,16.08,27.41,17.86,27.26,19.49Zm13.06-4.56a26.83,26.83,0,0,0-4.27-7.54s5-1.29,9.26,5.43Zm13.06,2.54H59s0,2.4-.33,24.87H54.05c0-.53,0-1.06,0-1.58H41.66c0,.52,0,1.05,0,1.58H37c-.48-20.45-.63-24.87-.63-24.87H42s0,2.12-.29,20.93H54C53.52,21.31,53.38,17.47,53.38,17.47Zm0,1.16a36.79,36.79,0,0,1-2.93,7.1,21.62,21.62,0,0,1,2.93,3.46l-3.8,2.69a24.14,24.14,0,0,0-1.48-2.65c-3.27,4.13-6.34,5-6.34,5a39.61,39.61,0,0,0,4.37-7.73A32.83,32.83,0,0,0,42.05,22a10.64,10.64,0,0,1,5.33,1.53,57.56,57.56,0,0,0,2.3-8Zm-1.83-7-5.13,1.77a26.41,26.41,0,0,0-3.75-7.77S47.76,4.61,51.55,11.62Zm3.7-7.4,5.28,1.4c-2.83,8.3-10.08,8.45-10.08,8.45A23.62,23.62,0,0,0,55.25,4.22Z"></path><path class="cls-1 svg-online-lesson-heading-3" d="M78.14,39.22H72.77c-.67-13-.87-29.09-.87-29.09h6.72S78.62,25,78.14,39.22Zm10.23-9.65c-8.5,0-8.93-8.83-8.93-8.83a17.74,17.74,0,0,0,8.93,2.11Z"></path><path class="cls-1 svg-online-lesson-heading-4" d="M120.91,25.11s-1,10.41-13.44,14.11h-5.42c-.67-13-.87-28.23-.87-28.23h6.72s0,9.89-.24,21.51A21.2,21.2,0,0,0,120.91,25.11Z"></path><path class="cls-1 svg-online-lesson-heading-5" d="M146.21,42.77c-7.4.43-13.11.43-13.11.43V37s3.41,0,7.68.15c.2-9,.58-27.46.58-36.49l3.5-.24C146.06,13.87,146.21,42.77,146.21,42.77Z"></path><path class="cls-1 svg-online-lesson-heading-6" d="M163.63,36.44s6.63-4.71,8.07-16L178.22,22C175.3,37.4,163.63,36.44,163.63,36.44Zm27.27-20.5v1.92H185c-.24,6-.53,14.45-.53,21.36h-4.17c-.82-7.44-1.25-15.6-1.44-21.36h-12V15.94h11.95l-.14-5.81h6.72s-.15,2.3-.29,5.81h2L189,14Z"></path><path class="cls-1 svg-online-lesson-heading-7" d="M209.28,19.06s-4.56-2.55-8.35-2.59l0-5C209.66,12,209.28,19.06,209.28,19.06Zm14.88-.91s4.32,12.57-21.74,20.06l-1.49-6.53C219.55,26.55,224.16,18.15,224.16,18.15Z"></path><path class="cls-1 svg-online-lesson-heading-8" d="M234.86,16.47s3.94,0,19.25.33c0,24-17.61,22.42-17.61,22.42s9.16-4,10.7-18.29l-12.34.43ZM253.63,13H236.3V11.09h13.49l1.92-1.92,1.92,1.92Z"></path><path class="cls-1 svg-online-lesson-heading-9" d="M262.61,20.88s11-.57,19.34-11.66l5.38,4a23.56,23.56,0,0,1-6.87,6.29c-.24,3.17-.72,10.56-.72,19.68H276c-.91-7.2-1.49-13.49-1.82-17.33A21.93,21.93,0,0,1,262.61,20.88Z"></path><path class="cls-1 svg-online-lesson-heading-10" d="M308.16,19.06s-4.56-2.55-8.35-2.59l0-5C308.54,12,308.16,19.06,308.16,19.06ZM323,18.15s4.32,12.57-21.74,20.06l-1.49-6.53C318.43,26.55,323,18.15,323,18.15Z"></path><path class="cls-1 svg-online-lesson-heading-11" d="M358,25.11s-1,10.41-13.44,14.11h-5.42c-.67-13-.87-28.23-.87-28.23H345s0,9.89-.24,21.51A21.2,21.2,0,0,0,358,25.11Z"></path><path class="cls-1 svg-online-lesson-heading-12" d="M368.54,16.51h4.18a43.85,43.85,0,0,0,1,8.74S368.54,25.59,368.54,16.51ZM383.62,20h5.61c0,19.2-17.18,19.2-17.18,19.2S383.62,33.12,383.62,20Zm-8.69-3.51h4.22a46,46,0,0,0,1,8.74S374.93,25.59,374.93,16.51Z"></path><path class="cls-1 svg-online-lesson-heading-13" d="M396.34,39.22a30,30,0,0,0,15.84-23.38c-6.87.29-11.48.29-11.48.29v-4.9s8.45,0,18.49.34c0,8.5-2.17,14.35-5.14,18.43,2.73-.43,7.39-.14,12.67,4.52l-4.85,4.7c-2.64-3.36-7-6.29-9.12-7.63A23.84,23.84,0,0,1,396.34,39.22Z"></path><path class="cls-1 svg-online-lesson-heading-14" d="M444.48,19.06s-4.56-2.55-8.35-2.59l.05-5C444.86,12,444.48,19.06,444.48,19.06Zm14.88-.91s4.32,12.57-21.74,20.06l-1.49-6.53C454.75,26.55,459.36,18.15,459.36,18.15Z"></path><path class="cls-1 svg-online-lesson-heading-15" d="M476.83,27.55s1.63,3.08,7.59,3.08c12.62,0,15.41-1.78,15.41-1.78l.52,6.72s-2.35,1.78-15.93,1.78C474.38,37.35,476.83,27.55,476.83,27.55Zm20-8.88a117.93,117.93,0,0,0-17-1.05V12.34a134.88,134.88,0,0,1,17.86,1.05Zm2-2.25,2.21-2.5a5.25,5.25,0,0,1,1.24,1.63l2.07-2.35a4.06,4.06,0,0,1,.62,5.95A10.71,10.71,0,0,0,502.47,16a4.21,4.21,0,0,1-.82,3.88A11.1,11.1,0,0,0,498.82,16.42Z"></path><path class="cls-1 svg-online-lesson-heading-16" d="M528.77,31.2c0,2.74-.14,6.44-.29,11.14h-5.57c-.14-2.69-.24-5.18-.33-7.39a19.36,19.36,0,0,1-13.4,6.29,34.92,34.92,0,0,0,9.22-10h-8.74V28.85h12.72c0-.77,0-1.34-.09-1.87a16.56,16.56,0,0,1-3.27.43,20.87,20.87,0,0,0,5.09-4.51h-2.73v.62h-5.57c-.19-2.59-.29-4.89-.39-6.86h-5.76V14.31h5.62c0-.92,0-1.73-.1-2.36h-4.6c-.48-5.37-.63-6.53-.63-6.53H516V6.1h7.25l-.43-2.84h6.09s0,.34-.19,2.84h7.11V5.42h5.08c.53,5.38.68,6.53.68,6.53h-6.1s0-.38.19-3.5H515.86c0,.48-.05,1-.05,1.58h5.9s0,1.44-.09,4.28h16l1.92-1.92,1.87,1.92v2.35h-7.1a14.46,14.46,0,0,1-1.73,3.89h1.63l1.92-1.92,1.92,1.92V22.9h-7.44a13.94,13.94,0,0,1-4.32,2.83h2.5v3.12h8.83l1.92-1.92,1.87,1.92V31.2Zm-3-10.65a16.11,16.11,0,0,0,1.78-3.89h-5.95c0,1.15-.05,2.45-.1,3.89Zm16.61,15.89-3.26,4.8c-9.27-4-9.22-9.8-9.22-9.8A46.09,46.09,0,0,0,542.35,36.44Z"></path><path class="cls-1 svg-online-lesson-heading-17" d="M567.89,3.31a56.34,56.34,0,0,1-.34,6.58H574V9.17h5.08c.48,19.73.63,33.22.63,33.22-4.61.53-8.45.67-8.45.67V37.78s.77,0,2.4,0c0-2.21.05-5.28.1-9.12l-5,2.16A51.11,51.11,0,0,0,564.67,21c-3.21,7.15-8,9.6-10.13,10.41l-.14,11h-5.09c-.53-19.73-.67-33.22-.67-33.22h6.1v.72h6.19c.14-2,.24-4.23.24-6.58Zm-7.2,8.93h-6c0,3.36,0,9.51-.2,18.24C556.27,28.27,559.49,22.85,560.69,12.24Zm6.53,0a33.26,33.26,0,0,1-1.68,6.67,18.72,18.72,0,0,1,8.21,7c0-3.88.09-8.44.19-13.63Z"></path></svg>
      <svg data-trigger id="レイヤー_1" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 271.83 101.4" class="online-lesson__headerSvg -sp"><path class="cls-1 svg-online-lesson-heaing-sp-1" d="M83.44,4.55s-2.48,0-5.6-.14c-.14,6.55-.42,20-.42,26.6l-2.55.18c-.88-9.77-1-30.88-1-30.88C79.28,0,83.44,0,83.44,0Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-2" d="M95,30.14s1.86-6.16,1.51-22H101v.45h1V8.16h4.41s0,1.5-.24,21.35c-3.37.38-6.16.49-6.16.49V26.15s.77,0,2.38.07l-.11-4.69H99.79C98,29.33,95,30.14,95,30.14Zm5.08-10.33h2.14c0-1.47,0-2.73-.07-3.88h-1.55C100.49,17.36,100.31,18.66,100.1,19.81Zm.67-5.6h1.36c0-1.71-.07-3-.1-3.88h-1.09C100.91,11.73,100.87,13,100.77,14.21Zm9.52-3.32a19.49,19.49,0,0,0-3.12-5.5s3.64-.94,6.76,4Zm9.52,1.85h4.09s0,1.75-.24,18.13H120.3c0-.38,0-.77,0-1.15h-9a11,11,0,0,0,0,1.15h-3.36c-.35-14.91-.45-18.13-.45-18.13h4.06s0,1.54-.21,15.26h9C119.91,15.54,119.81,12.74,119.81,12.74Zm0,.84a26.31,26.31,0,0,1-2.14,5.18,16.54,16.54,0,0,1,2.14,2.52l-2.77,2A17,17,0,0,0,116,21.32,10.27,10.27,0,0,1,111.34,25a29,29,0,0,0,3.18-5.64,24.65,24.65,0,0,0-3-3.29,7.83,7.83,0,0,1,3.88,1.12,41,41,0,0,0,1.68-5.84Zm-1.33-5.11-3.75,1.3A19.24,19.24,0,0,0,112,4.09S115.71,3.36,118.48,8.47Zm2.69-5.39,3.85,1c-2.06,6.06-7.35,6.17-7.35,6.17A17.14,17.14,0,0,0,121.17,3.08Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-3" d="M144.87,28.6H141c-.49-9.45-.63-21.21-.63-21.21h4.9S145.22,18.2,144.87,28.6Zm7.45-7c-6.19,0-6.51-6.44-6.51-6.44a13,13,0,0,0,6.51,1.54Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-4" d="M183.05,18.31s-.7,7.59-9.8,10.29h-4c-.48-9.45-.62-20.58-.62-20.58h4.9s0,7.21-.18,15.68A15.48,15.48,0,0,0,183.05,18.31Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-5" d="M208.5,31.19c-5.39.31-9.56.31-9.56.31V27s2.48,0,5.6.1c.14-6.54.42-20,.42-26.6l2.56-.18C208.39,10.12,208.5,31.19,208.5,31.19Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-6" d="M0,61.57s4.83-3.43,5.88-11.66l4.76,1.16C8.51,62.27,0,61.57,0,61.57Zm19.88-15V48h-4.3c-.18,4.38-.39,10.54-.39,15.58h-3c-.6-5.43-.91-11.38-1.05-15.58H2.31v-1.4H11l-.11-4.23h4.9s-.1,1.68-.21,4.23h1.47l1.4-1.4Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-7" d="M40.29,48.9A15.69,15.69,0,0,0,34.2,47l0-3.64C40.57,43.72,40.29,48.9,40.29,48.9Zm10.85-.67s3.15,9.17-15.86,14.63L34.2,58.1C47.78,54.36,51.14,48.23,51.14,48.23Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-8" d="M65.94,47s2.87,0,14,.24C80,64.75,67.13,63.6,67.13,63.6s6.69-2.94,7.81-13.34l-9,.32Zm13.69-2.52H67V43.08h9.84l1.4-1.39,1.4,1.39Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-9" d="M93.17,50.23s8-.42,14.11-8.51l3.92,2.94a17.36,17.36,0,0,1-5,4.59c-.17,2.31-.52,7.7-.52,14.35h-2.73c-.67-5.25-1.09-9.84-1.33-12.64A16,16,0,0,1,93.17,50.23Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-10" d="M133.39,48.9a15.69,15.69,0,0,0-6.1-1.89l0-3.64C133.67,43.72,133.39,48.9,133.39,48.9Zm10.85-.67s3.15,9.17-15.86,14.63l-1.09-4.76C140.88,54.36,144.24,48.23,144.24,48.23Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-11" d="M176.75,53.31s-.7,7.59-9.8,10.29H163c-.5-9.45-.63-20.58-.63-20.58h4.9s0,7.21-.18,15.68A15.48,15.48,0,0,0,176.75,53.31Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-12" d="M191.41,47h3.05a32.24,32.24,0,0,0,.73,6.37S191.41,53.66,191.41,47Zm11,2.56h4.09c0,14-12.53,14-12.53,14S202.41,59.15,202.41,49.6ZM196.07,47h3.08a33.55,33.55,0,0,0,.7,6.37S196.07,53.66,196.07,47Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-13" d="M218.68,63.6a21.85,21.85,0,0,0,11.55-17.05c-5,.21-8.37.21-8.37.21V43.19s6.16,0,13.48.25c0,6.19-1.57,10.46-3.75,13.44,2-.32,5.4-.11,9.25,3.29L237.3,63.6A27.48,27.48,0,0,0,230.65,58,17.39,17.39,0,0,1,218.68,63.6Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-14" d="M260.78,48.9A15.62,15.62,0,0,0,254.69,47l0-3.64C261.06,43.72,260.78,48.9,260.78,48.9Zm10.86-.67s3.15,9.17-15.86,14.63l-1.09-4.76C268.28,54.36,271.64,48.23,271.64,48.23Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-15" d="M94.33,90.09s1.19,2.24,5.53,2.24c9.2,0,11.23-1.29,11.23-1.29l.39,4.9s-1.72,1.29-11.62,1.29C92.54,97.23,94.33,90.09,94.33,90.09Zm14.59-6.47a85.42,85.42,0,0,0-12.35-.77V79a97.83,97.83,0,0,1,13,.77ZM110.36,82,112,80.15a3.93,3.93,0,0,1,.91,1.19l1.5-1.71a3,3,0,0,1,.46,4.34A7.78,7.78,0,0,0,113,81.66a3.09,3.09,0,0,1-.6,2.83A8.09,8.09,0,0,0,110.36,82Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-16" d="M139.2,92.75c0,2-.11,4.69-.21,8.12h-4.06c-.11-2-.18-3.78-.25-5.39a14.09,14.09,0,0,1-9.76,4.59,25.7,25.7,0,0,0,6.72-7.32h-6.38V91h9.28c0-.56,0-1-.07-1.37a11.82,11.82,0,0,1-2.38.32,15.41,15.41,0,0,0,3.71-3.29h-2v.45h-4.06c-.14-1.89-.21-3.57-.29-5h-4.2V80.43h4.1c0-.66,0-1.26-.07-1.71h-3.36c-.35-3.93-.46-4.76-.46-4.76h4.41v.49h5.29l-.31-2.07h4.44s0,.24-.14,2.07h5.18V74h3.71c.39,3.92.49,4.76.49,4.76H144.1s0-.28.14-2.56H129.78c0,.35,0,.7,0,1.16h4.3s0,1.05-.07,3.11h11.69l1.4-1.4,1.37,1.4v1.72h-5.18A10.82,10.82,0,0,1,142,85h1.19l1.4-1.4L146,85V86.7h-5.43a10.12,10.12,0,0,1-3.15,2.06h1.82V91h6.44l1.4-1.4,1.37,1.4v1.71ZM137,85a11.65,11.65,0,0,0,1.3-2.83H134c0,.84,0,1.78-.07,2.83ZM149.1,96.57l-2.38,3.5C140,97.16,140,92.93,140,92.93A34,34,0,0,0,149.1,96.57Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-17" d="M174.72,72.42a42.15,42.15,0,0,1-.24,4.79h4.69v-.52h3.71c.35,14.38.45,24.22.45,24.22-3.36.38-6.16.49-6.16.49V97.55l1.75,0c0-1.61,0-3.85.07-6.65l-3.64,1.58a37.72,37.72,0,0,0-3-7.18c-2.35,5.22-5.81,7-7.39,7.6l-.11,8h-3.71c-.38-14.39-.49-24.22-.49-24.22h4.45v.52h4.52c.1-1.47.17-3.08.17-4.79Zm-5.25,6.51h-4.34c0,2.45,0,6.93-.14,13.3C166.25,90.62,168.6,86.66,169.47,78.93Zm4.76,0A24.43,24.43,0,0,1,173,83.79a13.55,13.55,0,0,1,6,5.08c0-2.84.07-6.16.14-9.94Z"></path></svg>
    </h2>
    <div class="online-lesson__mainVisualWrapper">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/main_visual.png" alt="" class="online-lesson__mainVisual -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/main_visual-sp.png" alt="" class="online-lesson__mainVisual -sp">
    </div>
    <section class="online-lesson__about">
      <h2 class="online-lesson__aboutHeading">
        <span class="sr-only">「脳トレ」オンラインレッスンとは？</span>
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/about_header.svg"
            alt="「脳トレ」オンラインレッスンとは？"
            class="-pc"
        >
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/about_header-sp.svg"
            alt="「脳トレ」オンラインレッスンとは？"
            class="-sp"
        >
      </h2>
      <p class="online-lesson__aboutParagraph">
        <mark class="online-lesson__aboutParagraphMark">引き寄せの法則・脳科学・量子力学</mark>をベースに「現実がどのように創られているか？」の仕組みを学び、<br class="-pc" /><mark class="online-lesson__aboutParagraphMark">現実を意図的に動かすスキルを身につける</mark>、6ヶ月のオンライン＆リアルスクールです。<br />
        2016年にスタートし、在籍・卒業メンバーは<mark class="online-lesson__aboutParagraphMark">350名以上</mark>。<br />
        “特定の誰かがうまくいった方法”ではなく、<mark class="online-lesson__aboutParagraphMark">“誰にでも適用されるスキルと仕組み”</mark>を<br class="-pc" /><mark class="online-lesson__aboutParagraphMark">体系的に学べる</mark>ため、<mark class="online-lesson__aboutParagraphMark">再現性の高さに定評</mark>があります。
      </p>
      <div class="buttonWrapper online-lesson">
        <a href="#" class="button">
          <div class="buttonInner">
          <div class="buttonIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
          <span>メンバーの声</span>
          </div>
        </a>
      </div>
      <h2 class="online-lesson__overviewHeading">
        <span class="sr-only">レッスン内容の概要</span>
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/overview_header.svg"
            alt="レッスン内容の概要"
        >
      </h2>
      <p class="online-lesson__aboutParagraph">
        <mark class="online-lesson__aboutParagraphMark">6つのサポートで現実をサクサク動かしていく</mark>「脳トレ」を効果的に身につけることができます。<br />
        <mark class="online-lesson__aboutParagraphMark">世界中どこに住んでいても、忙しい人でも、ご自身のペースでトレーニングできる</mark>よう、<br />
        サポート体制を整えていますので、安心してご自分のペースで進めてくださいね。<br class="-pc" />さらに「脳トレ」を深めたい人に向けて、<mark class="online-lesson__aboutParagraphMark">再受講制度</mark>や<mark class="online-lesson__aboutParagraphMark">セッション提供者向けコース</mark>もあります。
      </p>
    </section>
    <section class="online-lesson__steps">
      <h2 class="online-lesson__stepsHeading">
        <span class="sr-only">このボリュームがあなたの頑固な現実にアプローチする！</span>
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/approach_board.png"
            alt="このボリュームがあなたの頑固な現実にアプローチする！"
        >
      </h2>
      <div class="online-lesson__step -step1" id="online-lesson-step1">
        <h2 class="online-lesson__step1Heading">
          <span class="sr-only">「脳トレ」の基本知識を動画で学ぶ</span>
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step1_header.svg"
              alt="「脳トレ」の基本知識を動画で学ぶ"
          >
        </h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step1_text-sp.svg" alt="充実の動画26本!!" class="online-lesson__step1Text -sp">
        <div class="online-lesson__stepsFeatures">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step1_text.svg" alt="充実の動画26本!!" class="online-lesson__step1Text -pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step1_icon.svg" alt="24H" class="online-lesson__step1Icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step1_image.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step1_image@2x.jpg" alt="" class="online-lesson__step1Image">
        </div>
        <p class="online-lesson__stepParagraph">ネット環境があれば、<strong>パソコンでもスマホでも、24時間いつでもどこでも見ることが可能。</strong>繰り返し動画を視聴することで、自然と<strong>「サクサク現実を変えていく人の脳内設定」を取り入れることができます。</strong></p>
        <div id="online-lesson__modal">
          <button href="" class="online-lesson__stepsButton" @click="openModal">
            <div class="buttonIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_angle-pink.svg" alt=""></div>
            <span>動画目次はこちら</span>
          </button>
          <open-modal v-show="showContent" v-on:from-child="closeModal">
            <h2 class="online-lesson-movie__heading">
              <span class="sr-only">「脳トレ」オンラインレッスン動画目次</span>
              <img
                src="/wp/wp-content/themes/noutore-love/assets/img/online-lesson/online-lesson_movie_header.svg"
                alt="「脳トレ」オンラインレッスン動画目次"
                class="-pc"
              >
              <img
                src="/wp/wp-content/themes/noutore-love/assets/img/online-lesson/online-lesson_movie_header-sp.svg"
                alt="「脳トレ」オンラインレッスン動画目次"
                class="-sp"
              >
            </h2>
            <h3 class="online-lesson-movie__subHeading">プロローグ</h3>
            <ol class="online-lesson-movie__list">
              <li class="online-lesson-movie__item">①オーダーは１００％通る</li>
            </ol>
            <h3 class="online-lesson-movie__subHeading">【STEP１】「脳トレ」入門講座</h3>
            <ol class="online-lesson-movie__list">
              <li class="online-lesson-movie__item">② want toとhave toについて</li>
              <li class="online-lesson-movie__item">③ ピュアハート満たしの重要性</li>
              <li class="online-lesson-movie__item">④ オーダーを最速で通す自分至上主義</li>
              <li class="online-lesson-movie__item">⑤ エフィカシー（クロックサイクル）について</li>
              <li class="online-lesson-movie__item">⑥ 現実が作られる仕組みについて</li>
            </ol>
            <h3 class="online-lesson-movie__subHeading">【STEP2】「脳トレ」基礎講座</h3>
            <ol class="online-lesson-movie__list">
              <li class="online-lesson-movie__item">⑦ ゲスい・かっこ悪い自分を認めることのメリット</li>
              <li class="online-lesson-movie__item">⑧ 必ず通るオリジナルオーダーの作り方</li>
              <li class="online-lesson-movie__item">⑨ ネガティブ感情の美味しい使い方</li>
              <li class="online-lesson-movie__item">⑩ 重要度を自由自在に操る方法</li>
            </ol>
            <h3 class="online-lesson-movie__subHeading">【STEP3】脳の機能について学ぶ講座</h3>
            <ol class="online-lesson-movie__list">
              <li class="online-lesson-movie__item">⑪ 心理的盲点（スコトーマ）とフレーム</li>
              <li class="online-lesson-movie__item">⑫ オーダー力を下げる意識の出張について</li>
              <li class="online-lesson-movie__item">⑬ 引き寄せ力を上げるRASについて</li>
              <li class="online-lesson-movie__item">⑭ 知識があっても現実が動かない事例</li>
              <li class="online-lesson-movie__item">⑮ 叶う意図と叶わない期待について</li>
            </ol>
            <h3 class="online-lesson-movie__subHeading">【STEP4】<br class="-sp">人間関係マスターになる講座</h3>
            <ol class="online-lesson-movie__list">
              <li class="online-lesson-movie__item">⑯ 相手が別人になるパラレルオーダー</li>
              <li class="online-lesson-movie__item">⑰ の可能性を引き出す「高く観る」スキルについて</li>
              <li class="online-lesson-movie__item">⑱ オーダーの進み具合を把握する方法</li>
              <li class="online-lesson-movie__item">⑲ 損得勘定を手放すと莫大な利息がついてくる件について</li>
              <li class="online-lesson-movie__item">⑳ 人生を変えるメンターとの付き合い方</li>
            </ol>
            <h3 class="online-lesson-movie__subHeading">【STEP5】恋愛・結婚・<br class="-sp">パートナーシップを深める講座</h3>
            <ol class="online-lesson-movie__list">
              <li class="online-lesson-movie__item">㉑ 相手が離れるクレーム・相手を虜にするピュアハート</li>
              <li class="online-lesson-movie__item">㉒ 恋愛・結婚をサクッと進める脳内設定を手に入れる</li>
              <li class="online-lesson-movie__item">㉓ 最高にカッコイイ彼を登場させる方法</li>
              <li class="online-lesson-movie__item">㉔ ２人揃って進化し続ける最強パートナーシップの作り方</li>
              <li class="online-lesson-movie__item">㉕ 言えない恋愛（不倫）が起こる仕組みと進め方</li>
            </ol>
            <h3 class="online-lesson-movie__subHeading">番外編　季節診断</h3>
            <ol class="online-lesson-movie__list">
              <li class="online-lesson-movie__item">㉖ 人間関係をスムーズに構築する４つの季節の活用法・相性について</li>
            </ol>
          </open-modal>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_bubble.png" alt="" class="online-lesson__stepsBubble -pc">
        <div class="online-lesson__step1_2_roadWrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step1_2_road-sp.svg" alt="" class="online-lesson__step1_2 -sp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_snake-sp.png" alt="" class="online-lesson__stepsSnake -sp">
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_trees.png" alt="" class="online-lesson__stepsTrees -pc">
      <svg id="レイヤー_1" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 297.6 399.84" class="online-lesson__step1_2 -pc"><path class="cls-1 online-lesson__step1_2" d="M126.76,13.41A57.88,57.88,0,0,1,123,19.77l1.68-2.47a74.43,74.43,0,0,1-13.47,14.61l3-2.51a118.66,118.66,0,0,1-11,8.11c-2,1.3-4,2.54-6,3.76-1.53.93,3.82-2.26,3-1.81l-.82.48-1.44.83C97,41.36,96,42,94.93,42.52,86.8,47,78.42,51,70.05,55,53.8,62.76,36.49,70.55,24.19,84.12,15.5,93.7,7.35,104.73,3.07,117.05c-4,11.42-4.31,24.2.27,35.47C13,176.36,37,189.93,60.83,195.91c13.89,3.49,28.27,5.31,42.5,6.74,18.45,1.84,38.3-.84,54.41-10.41,6-3.58,12.42-8.91,14-16.12a21,21,0,0,0-2.88-16.46,28.72,28.72,0,0,0-6.42-7.34,36.89,36.89,0,0,0-9.89-5.07c-8.14-2.88-17.4-3.24-25.93-2.77-31,1.7-62,14-85,35.05-18.06,16.52-31.54,41.22-30.2,66.21,1.2,22.48,17.94,40.18,36.64,50.74,23.53,13.28,50.11,18.06,76.41,22.66,6.8,1.19,13.6,2.34,20.39,3.56l-3.83-.69c21.22,3.83,42.49,8.47,62,17.85l-2.7-1.3c16.89,8.18,32.58,19.58,43.54,35l-1.34-1.9A76.08,76.08,0,0,1,254,395.8c.79,2.94,5.61,3.66,7.87,3.89a45,45,0,0,0,16-1.8c5.06-1.44,10.52-3.2,14.74-6.44,2.1-1.6,5.71-4.17,4.87-7.3-5.54-20.77-20.25-38.1-37.64-50.21-19.7-13.72-42.59-21.52-65.87-26.56-15.91-3.44-32-5.9-48-8.79l3.83.69c-19.51-3.54-39.26-7.56-57.23-16.23l2.7,1.3C82.8,278.28,71.07,270.08,63,258.69l1.34,1.9a51.73,51.73,0,0,1-9.18-34.77l-.21,2.31c1.34-13.25,6.57-25.93,14-36.91l-1.68,2.48a95.22,95.22,0,0,1,17-18.79l-3,2.52c2.12-1.78,4.31-3.48,6.57-5.07,1.06-.74,2.13-1.47,3.21-2.17.62-.4,1.25-.78,1.87-1.17,2.31-1.45-4.9,2.84-1.68,1q3.34-1.92,6.86-3.57l1-.46q2.73-1.23-3.46,1.51l2-.85c1.19-.48,2.4-.94,3.61-1.38l2.09-.71c-.06,0-7,2.2-3.6,1.16q2.11-.63,4.26-1.17l1.61-.38q3.19-.72-4.24.91l1.09-.22q1.89-.37,3.81-.66l2.19-.29q3-.36-3.76.41l1.11-.11c1.46-.13,2.93-.22,4.4-.26.82,0,4,0,.17,0s-.66,0,.16.07a49.39,49.39,0,0,1,5,.59l-3.83-.69a34.78,34.78,0,0,1,8.28,2.59l-2.7-1.3a23.68,23.68,0,0,1,9,7.37L125,170.65a20,20,0,0,1,3.86,12.78l.21-2.31a15.71,15.71,0,0,1-2.47,7l1.69-2.48a17.09,17.09,0,0,1-3,3.35l3-2.51c-.35.28-.7.56-1.06.82-2.31,1.64,2.43-1.39,2.55-1.45-.41.2-.81.43-1.21.64-2.35,1.23,5.81-2.35,3.29-1.45l-.66.24q-2.71,1,4.58-1.46l-1.38.39c-2.82.8,6.86-1.34,3.95-.84-.48.09-1,.18-1.45.25l-1.49.21c.08,0,6.65-.65,3.4-.41-.93.07-1.87.11-2.8.13-.51,0-1,0-1.54,0-1.95,0,5.68.12,2.69,0-1,0-2-.09-3-.16a287.48,287.48,0,0,1-30.66-3.95l3.83.69c-10.93-2-21.7-4.88-31.76-9.68l2.7,1.3A70.72,70.72,0,0,1,51.53,149.9l1.34,1.89c-6.63-9.37-10.2-20.36-9.24-31.89l-.21,2.32c1-10.78,5.68-20.68,11.69-29.56l-1.68,2.48C57.92,88.6,63.05,82,69.13,76.83l-3,2.51a71.31,71.31,0,0,1,7.72-5.53l1-.58.49-.3c1.84-1.13-3.76,2.22-3.09,1.84l2.35-1.36c1.58-.89,3.18-1.75,4.78-2.59,7.14-3.75,14.46-7.14,21.72-10.63,17.8-8.56,35.29-17.85,50.34-30.79a75.55,75.55,0,0,0,18.38-23c1.44-2.84-1.73-4.79-3.82-5.51-4.06-1.4-9.92-.88-14-.16A54.72,54.72,0,0,0,135.48,6c-3.35,1.82-6.93,3.86-8.72,7.4Z"/></svg>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_snake.png" alt="" class="online-lesson__stepsSnake -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_kusa.png" alt="" class="online-lesson__stepsKusa -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_flower.png" alt="" class="online-lesson__stepsFlower -pc">
      <div class="online-lesson__step -step2" id="online-lesson-step2">
        <h2 class="online-lesson__step2Heading">
          <span class="sr-only">月2回のグループセッションでメンターに直接相談する（対面・オンライン）</span>
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_header.svg"
              alt="月2回のグループセッションでメンターに直接相談する（対面・オンライン）"
              class="-pc"
          >
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_header-sp.svg"
              alt="月2回のグループセッションでメンターに直接相談する（対面・オンライン）"
              class="-sp"
          >
        </h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_text-sp.svg" alt="レッスン改定で回数が倍以上に！" class="online-lesson__step2Text -sp">
        <div class="online-lesson__stepsFeatures">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_text.svg" alt="レッスン改定で回数が倍以上に！" class="online-lesson__step2Text -pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_icon.svg" alt="" class="online-lesson__step2Icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_image.jpg" alt="" class="online-lesson__step2Image">
        </div>
        <p class="online-lesson__stepParagraph">現実をダイナミックに動かすためには、その人<strong>専用に個別カスタマイズされたアドバイス・サポートが必須</strong>です。ただ知識を入れるだけではなく、<strong>直接メンターに相談することでインプットとアウトプットを行います。</strong></p>
        <div class="online-lesson__chargeWrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/charge.svg" alt="担当" class="online-lesson__chargeImage">
          <div class="online-lesson__charger">
            <div class="online-lesson__chargerIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
            <span class="online-lesson__chargeName">saki</span>
          </div>
          <div class="online-lesson__charger">
            <div class="online-lesson__chargerIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
            <span class="online-lesson__chargeName">みい</span>
          </div>
        </div>
        <h2 class="online-lesson__step2SubHeading">
          <div class="online-lesson__step2SubHeadingWrapper">
            <span class="sr-only">毎回10回、主要都市で開催！</span>
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_subHeader.svg"
                alt="毎月10回、主要都市で開催！"
                class="online-lesson__step2SubHeadingImage -pc"
            >
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_subHeader-sp.svg"
                alt="毎月10回、主要都市で開催！"
                class="online-lesson__step2SubHeadingImage -sp"
            >
          </div>
        </h2>
        <div class="online-lesson__stepsSchedules">
          <span class="online-lesson__stepsSchedule">
            <div class="online-lesson__stepsEvenAlignment">
              <span>東</span><span>京</span>
            </div>
            <span class="online-lesson__stepsSmall">（対面）</span>
          </span>
          <span class="online-lesson__stepsSchedule">
            <div class="online-lesson__stepsEvenAlignment">
              <span>京</span><span>都</span>
            </div>
            <span class="online-lesson__stepsSmall">（対面）</span>
          </span>
          <span class="online-lesson__stepsSchedule">
            zoom
            <span class="online-lesson__stepsSmall">（オンライン）</span>
          </span>
          <span class="online-lesson__stepsSchedule">
            全国各地
            <span class="online-lesson__stepsSmall">（対面or<br />オンライン）</span>
          </span>
        </div>
        <p class="online-lesson__stepsScheduleParagraph">ご都合の良い回を選んで<br class="-sp"><mark class="online-lesson__stepsMark">月2回まで</mark>ご参加ください</p>
        <div class="online-lesson__step2_3_roadWrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_3_road-sp.svg" alt="" class="online-lesson__step2_3 -sp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_kusa-sp.png" alt="" class="online-lesson__stepsKusa -sp">
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_butterfly.png" alt="" class="online-lesson__stepsButterfly -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_3_road.svg" alt="" class="online-lesson__step2_3 -pc">
      <div class="online-lesson__step -step3" id="online-lesson-step3">
        <h2 class="online-lesson__step3Heading">
          <span class="sr-only">過去メンバーの相談・回答を読んでヒントを得る</span>
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step3_header.svg"
              alt="過去メンバーの相談・回答を読んでヒントを得る"
          >
        </h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step3_text-sp.svg" alt="恋愛・結婚・夫婦間・仕事・お金・家族・美容etc" class="online-lesson__step3Text -sp">
        <div class="online-lesson__stepsFeatures">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step3_text.svg" alt="恋愛・結婚・夫婦間・仕事・お金・家族・美容etc" class="online-lesson__step3Text -pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step3_icon.svg" alt="" class="online-lesson__step3Icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step3_image.jpg" alt="" class="online-lesson__step3Image">
        </div>
        <p class="online-lesson__stepParagraph">
          今まで投稿されたメンバーからの相談を公開しています。<br />
          <strong>相談件数は500件超</strong>。相談投稿に対して、江藤有紀を含む、今は<strong>予約も取れないセッション提供者から返信</strong>をしています。過去のメンバーからのリアルな相談と、それに対しての回答は、あなたの<strong>オーダーを通すヒントの宝庫</strong>です。
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step3_4_road-sp.svg" alt="" class="online-lesson__step3_4 -sp">
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step3_4_road.svg" alt="" class="online-lesson__step3_4 -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_bird.png" alt="" class="online-lesson__stepsBird -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_flamingo.png" alt="" class="online-lesson__stepsFlamingo -pc">
      <div class="online-lesson__step -step4" id="online-lesson-step4">
        <h2 class="online-lesson__step4Heading">
          <span class="sr-only">コミュニティメンバー限定の成功報告コーナーを使う</span>
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step4_header.svg"
              alt="コミュニティメンバー限定の成功報告コーナーを使う"
          >
        </h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step4_text-sp.svg" alt="よりリアルにイメージ！" class="online-lesson__step4Text -sp">
        <div class="online-lesson__stepsFeatures">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step4_text.svg" alt="よりリアルにイメージ！" class="online-lesson__step4Text -pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step4_icon.svg" alt="" class="online-lesson__step4Icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step4_image.jpg" alt="" class="online-lesson__step4Image">
        </div>
        <p class="online-lesson__stepParagraph">
          現役メンバーはもちろん卒業メンバーも含め、<strong>オーダーが通った報告や、現実が動いている進捗シェアコーナー</strong>を設けています。<br />
          表にはなかなか出てこない、<strong>オーダーを通している最中のリアルな情報</strong>を知ることができます。ぜひ読むだけではなく、ご自身のシェアも投稿してみてくださいね。
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step4_5_road-sp.svg" alt="" class="online-lesson__step4_5 -sp">
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_leafs.png" alt="" class="online-lesson__stepsLeafs -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step4_5_road.svg" alt="" class="online-lesson__step4_5 -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_apple.png" alt="" class="online-lesson__stepsApple -pc">
      <div class="online-lesson__step -step5" id="online-lesson-step5">
        <h2 class="online-lesson__step5Heading">
          <span class="sr-only">タイムリーなコラムを読む</span>
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step5_header.svg"
              alt="タイムリーなコラムを読む"
              class="-pc"
          >
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step5_header-sp.svg"
              alt="タイムリーなコラムを読む"
              class="-sp"
          >
        </h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step5_text-sp.svg" alt="150本超え！" class="online-lesson__step5Text -sp">
        <div class="online-lesson__stepsFeatures">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step5_text.svg" alt="150本超え！" class="online-lesson__step5Text -pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step5_icon.svg" alt="" class="online-lesson__step5Icon">
        </div>
        <p class="online-lesson__stepParagraph"><strong>リアルタイムでオーダーを通しているサンプル</strong>をコラムでお届けします。</p>
        <div class="online-lesson__chargeWrapper -step5">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/charge.svg" alt="担当" class="online-lesson__chargeImage">
          <div class="online-lesson__chargerWrapper">
            <div class="online-lesson__charger">
              <div class="online-lesson__chargerIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
              <span class="online-lesson__chargeName">江藤有紀</span>
            </div>
            <div class="online-lesson__charger">
              <div class="online-lesson__chargerIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
              <span class="online-lesson__chargeName">小原彩夏</span>
            </div>
          </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step5_6_road-sp.svg" alt="" class="online-lesson__step5_6 -sp">
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step5_6_road.svg" alt="" class="online-lesson__step5_6 -pc">
      <div class="online-lesson__step -step6" id="online-lesson-step6">
        <h2 class="online-lesson__step6Heading">
          <span class="sr-only">限定セミナーに参加する</span>
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step6_header.svg"
              alt="限定セミナーに参加する"
              class="-pc"
          >
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step6_header-sp.svg"
              alt="限定セミナーに参加する"
              class="-sp"
          >
        </h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step6_text-sp.svg" alt="突き抜けるきっかけ作りに！" class="online-lesson__step6Text -sp">
        <div class="online-lesson__stepsFeatures">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step6_text.svg" alt="突き抜けるきっかけ作りに！" class="online-lesson__step6Text -pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step6_icon.svg" alt="" class="online-lesson__step6Icon">
        </div>
        <p class="online-lesson__stepParagraph"><strong>不定期でゲストを迎えたセミナー</strong>を開催します。（東京対面・録画あり）</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step6_end_road-sp.svg" alt="" class="online-lesson__step6_end -sp">
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step6_end_road.svg" alt="" class="online-lesson__step6_end -pc">
      <picture class="online-lesson__welcome">
        <img data-trigger src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/welcome_text.svg" alt="" class="online-lesson__welcomeText">
      </picture>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/flow_petal.png" alt="" class="online-lesson__stepsPetal -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/flow_petal.png" alt="" class="online-lesson__stepsPetal -sp">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_footer.png" alt="" class="online-lesson__stepsFooter -pc">
    </section>
    <section class="online-lesson__flow">
      <div class="online-lesson__flowInner">
        <h2 class="online-lesson__flowHeading">
          <span class="sr-only">レッスン参加までの流れ</span>
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/flow_header.svg"
              alt="レッスン参加までの流れ"
              class="-pc"
          >
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/flow_header-sp.svg"
              alt="レッスン参加までの流れ"
              class="-sp"
          >
        </h2>
        <h2 class="online-lesson__flowSubHeading">【申込フォームよりエントリー】</h2>
        <p class="online-lesson__flowParagraph">
          奇数月の25日～新メンバー募集開始になります。（メルマガ会員優先）<br />
          エントリー完了後に届く自動返信メールの決済URLからお手続きをお願いします。<br />
          レッスン開始月の1日になりましたら会員サイトへログインするための会員登録用メールが届きます。
        </p>
        <h2 class="online-lesson__flowSubHeading">【レッスン参加後の流れ】</h2>
        <p class="online-lesson__flowParagraph">はじめに会員サイトの「レッスンの進め方」をご確認ください。</p>
        <h2 class="online-lesson__flowSubHeading">【月額決済につきまして】</h2>
        <p class="online-lesson__flowParagraph">月会費はStripeというオンラインクレジット決済を利用しています。最初に決済いただいた日が、毎月の決済日となります。</p>
      </div>
    </section>
    <section class="online-lesson__recruit">
      <h2 class="online-lesson__recruitHeading">
        <span class="sr-only">2020年8月スタートメンバー募集要綱</span>
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/recruit_header.svg"
            alt="2020年8月スタートメンバー募集要綱"
        >
      </h2>
      <ul class="online-lesson__recruitOverviewList">
        <li class="online-lesson__recruitOverviewItem">
          <dl>
            <dt>募集人数</dt>
            <dd>30名</dd>
          </dl>
        </li>
        <li class="online-lesson__recruitOverviewItem">
          <dl>
            <dt>募集期間</dt>
            <dd>7月25日〜末日</dd>
          </dl>
        </li>
        <li class="online-lesson__recruitOverviewItem">
          <dl class="online-lesson">
            <dt>参加費用</dt>
            <dd class="-pc">月額30,000円（税別）+入学金30,000円（税別）</dd>
            <dd class="-sp">月額30,000円（税別）<span class="online-lesson__recruitSpan">+</span>入学金30,000円（税別）</dd>
          </dl>
        </li>
      </ul>
      <span class="online-lesson__flowCaution">※事務手続きの関係上、原則クレジット決済のみとなります。</span>
      <div class="online-lesson__terms">
        <h3 class="online-lesson__termsHeading">利用規約</h3>
        <p>・お申し込みをいただいた時点で、下記の内容に同意いただいたものとして進めます。</p>
        <p>・本レッスンは「脳トレ」の概念を伝えるものです。取得度には個人差がありますので、オンラインレッスンに参加するだけで希望の変化が現れることをお約束するものではありません。</p>
        <p>・デジタルコンテンツという特性上、レッスン開始後（会員サイトへのログイン後）のキャンセルは承ることができません。</p>
        <p>・お申し込み後3日以内にレッスン費用を決済いただき、決済を持って確定といたします。決済後のキャンセルはレッスン開始月の1日以前の場合、入学金を除いた金額を返金いたします。</p>
        <p>・レッスン規約等が改定された場合の告知は、ウェブサイト上への表示と申込者への連絡先へ通知します。</p>
      </div>
      <div id="online-lesson__termsAgreeWrapper">
        <div class="online-lesson__termsAgree">
          <input type="checkbox" id="agree" value="同意する" :checked="isChecked" @change="toggleChecked" class="online-lesson__termsCheckbox">
          <label for="agree">利用規約に同意する</label>
        </div>
        <span v-if="hasError" class="online-lesson__termsError">※利用規約に同意が行われていません</span>
        <div class="buttonWrapper">
          <a href="https://39auto.biz/namakemono-yuki/touroku/entryform15.htm" class="button" @click="consentCheck">
            <div class="buttonInner">
              <span>お申し込みはこちら</span>
            </div>
          </a>
        </div>
      </div>
    </section>

<?php
get_sidebar();
get_footer();
