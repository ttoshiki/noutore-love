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
    <h1 class="online-lesson__online-lessonHeading">
      <span class="sr-only">「脳トレ」オンラインレッスンご案内</span>
      <svg data-trigger id="レイヤー_1" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 579.7 43.2" class="online-lesson__headerSvg -pc"><path class="cls-1 svg-online-lesson-heading-1" d="M13.11,6.24s-3.41,0-7.69-.19c-.19,9-.57,27.46-.57,36.48l-3.51.24C.14,29.38,0,.43,0,.43,7.39,0,13.11,0,13.11,0Z"></path><path class="cls-1 svg-online-lesson-heading-2" d="M19.39,41.33s2.54-8.45,2.06-30.14h6.1v.62h1.39v-.62H35s0,2.06-.33,29.28c-4.61.53-8.45.67-8.45.67V35.86s1.05,0,3.26.1l-.14-6.44H25.92C23.52,40.23,19.39,41.33,19.39,41.33Zm7-14.16h2.93c0-2-.05-3.74-.1-5.33H27.07Q26.78,24.8,26.35,27.17Zm.91-7.68h1.88c-.05-2.35-.1-4.08-.15-5.33H27.5C27.46,16.08,27.41,17.86,27.26,19.49Zm13.06-4.56a26.83,26.83,0,0,0-4.27-7.54s5-1.29,9.26,5.43Zm13.06,2.54H59s0,2.4-.33,24.87H54.05c0-.53,0-1.06,0-1.58H41.66c0,.52,0,1.05,0,1.58H37c-.48-20.45-.63-24.87-.63-24.87H42s0,2.12-.29,20.93H54C53.52,21.31,53.38,17.47,53.38,17.47Zm0,1.16a36.79,36.79,0,0,1-2.93,7.1,21.62,21.62,0,0,1,2.93,3.46l-3.8,2.69a24.14,24.14,0,0,0-1.48-2.65c-3.27,4.13-6.34,5-6.34,5a39.61,39.61,0,0,0,4.37-7.73A32.83,32.83,0,0,0,42.05,22a10.64,10.64,0,0,1,5.33,1.53,57.56,57.56,0,0,0,2.3-8Zm-1.83-7-5.13,1.77a26.41,26.41,0,0,0-3.75-7.77S47.76,4.61,51.55,11.62Zm3.7-7.4,5.28,1.4c-2.83,8.3-10.08,8.45-10.08,8.45A23.62,23.62,0,0,0,55.25,4.22Z"></path><path class="cls-1 svg-online-lesson-heading-3" d="M78.14,39.22H72.77c-.67-13-.87-29.09-.87-29.09h6.72S78.62,25,78.14,39.22Zm10.23-9.65c-8.5,0-8.93-8.83-8.93-8.83a17.74,17.74,0,0,0,8.93,2.11Z"></path><path class="cls-1 svg-online-lesson-heading-4" d="M120.91,25.11s-1,10.41-13.44,14.11h-5.42c-.67-13-.87-28.23-.87-28.23h6.72s0,9.89-.24,21.51A21.2,21.2,0,0,0,120.91,25.11Z"></path><path class="cls-1 svg-online-lesson-heading-5" d="M146.21,42.77c-7.4.43-13.11.43-13.11.43V37s3.41,0,7.68.15c.2-9,.58-27.46.58-36.49l3.5-.24C146.06,13.87,146.21,42.77,146.21,42.77Z"></path><path class="cls-1 svg-online-lesson-heading-6" d="M163.63,36.44s6.63-4.71,8.07-16L178.22,22C175.3,37.4,163.63,36.44,163.63,36.44Zm27.27-20.5v1.92H185c-.24,6-.53,14.45-.53,21.36h-4.17c-.82-7.44-1.25-15.6-1.44-21.36h-12V15.94h11.95l-.14-5.81h6.72s-.15,2.3-.29,5.81h2L189,14Z"></path><path class="cls-1 svg-online-lesson-heading-7" d="M209.28,19.06s-4.56-2.55-8.35-2.59l0-5C209.66,12,209.28,19.06,209.28,19.06Zm14.88-.91s4.32,12.57-21.74,20.06l-1.49-6.53C219.55,26.55,224.16,18.15,224.16,18.15Z"></path><path class="cls-1 svg-online-lesson-heading-8" d="M234.86,16.47s3.94,0,19.25.33c0,24-17.61,22.42-17.61,22.42s9.16-4,10.7-18.29l-12.34.43ZM253.63,13H236.3V11.09h13.49l1.92-1.92,1.92,1.92Z"></path><path class="cls-1 svg-online-lesson-heading-9" d="M262.61,20.88s11-.57,19.34-11.66l5.38,4a23.56,23.56,0,0,1-6.87,6.29c-.24,3.17-.72,10.56-.72,19.68H276c-.91-7.2-1.49-13.49-1.82-17.33A21.93,21.93,0,0,1,262.61,20.88Z"></path><path class="cls-1 svg-online-lesson-heading-10" d="M308.16,19.06s-4.56-2.55-8.35-2.59l0-5C308.54,12,308.16,19.06,308.16,19.06ZM323,18.15s4.32,12.57-21.74,20.06l-1.49-6.53C318.43,26.55,323,18.15,323,18.15Z"></path><path class="cls-1 svg-online-lesson-heading-11" d="M358,25.11s-1,10.41-13.44,14.11h-5.42c-.67-13-.87-28.23-.87-28.23H345s0,9.89-.24,21.51A21.2,21.2,0,0,0,358,25.11Z"></path><path class="cls-1 svg-online-lesson-heading-12" d="M368.54,16.51h4.18a43.85,43.85,0,0,0,1,8.74S368.54,25.59,368.54,16.51ZM383.62,20h5.61c0,19.2-17.18,19.2-17.18,19.2S383.62,33.12,383.62,20Zm-8.69-3.51h4.22a46,46,0,0,0,1,8.74S374.93,25.59,374.93,16.51Z"></path><path class="cls-1 svg-online-lesson-heading-13" d="M396.34,39.22a30,30,0,0,0,15.84-23.38c-6.87.29-11.48.29-11.48.29v-4.9s8.45,0,18.49.34c0,8.5-2.17,14.35-5.14,18.43,2.73-.43,7.39-.14,12.67,4.52l-4.85,4.7c-2.64-3.36-7-6.29-9.12-7.63A23.84,23.84,0,0,1,396.34,39.22Z"></path><path class="cls-1 svg-online-lesson-heading-14" d="M444.48,19.06s-4.56-2.55-8.35-2.59l.05-5C444.86,12,444.48,19.06,444.48,19.06Zm14.88-.91s4.32,12.57-21.74,20.06l-1.49-6.53C454.75,26.55,459.36,18.15,459.36,18.15Z"></path><path class="cls-1 svg-online-lesson-heading-15" d="M476.83,27.55s1.63,3.08,7.59,3.08c12.62,0,15.41-1.78,15.41-1.78l.52,6.72s-2.35,1.78-15.93,1.78C474.38,37.35,476.83,27.55,476.83,27.55Zm20-8.88a117.93,117.93,0,0,0-17-1.05V12.34a134.88,134.88,0,0,1,17.86,1.05Zm2-2.25,2.21-2.5a5.25,5.25,0,0,1,1.24,1.63l2.07-2.35a4.06,4.06,0,0,1,.62,5.95A10.71,10.71,0,0,0,502.47,16a4.21,4.21,0,0,1-.82,3.88A11.1,11.1,0,0,0,498.82,16.42Z"></path><path class="cls-1 svg-online-lesson-heading-16" d="M528.77,31.2c0,2.74-.14,6.44-.29,11.14h-5.57c-.14-2.69-.24-5.18-.33-7.39a19.36,19.36,0,0,1-13.4,6.29,34.92,34.92,0,0,0,9.22-10h-8.74V28.85h12.72c0-.77,0-1.34-.09-1.87a16.56,16.56,0,0,1-3.27.43,20.87,20.87,0,0,0,5.09-4.51h-2.73v.62h-5.57c-.19-2.59-.29-4.89-.39-6.86h-5.76V14.31h5.62c0-.92,0-1.73-.1-2.36h-4.6c-.48-5.37-.63-6.53-.63-6.53H516V6.1h7.25l-.43-2.84h6.09s0,.34-.19,2.84h7.11V5.42h5.08c.53,5.38.68,6.53.68,6.53h-6.1s0-.38.19-3.5H515.86c0,.48-.05,1-.05,1.58h5.9s0,1.44-.09,4.28h16l1.92-1.92,1.87,1.92v2.35h-7.1a14.46,14.46,0,0,1-1.73,3.89h1.63l1.92-1.92,1.92,1.92V22.9h-7.44a13.94,13.94,0,0,1-4.32,2.83h2.5v3.12h8.83l1.92-1.92,1.87,1.92V31.2Zm-3-10.65a16.11,16.11,0,0,0,1.78-3.89h-5.95c0,1.15-.05,2.45-.1,3.89Zm16.61,15.89-3.26,4.8c-9.27-4-9.22-9.8-9.22-9.8A46.09,46.09,0,0,0,542.35,36.44Z"></path><path class="cls-1 svg-online-lesson-heading-17" d="M567.89,3.31a56.34,56.34,0,0,1-.34,6.58H574V9.17h5.08c.48,19.73.63,33.22.63,33.22-4.61.53-8.45.67-8.45.67V37.78s.77,0,2.4,0c0-2.21.05-5.28.1-9.12l-5,2.16A51.11,51.11,0,0,0,564.67,21c-3.21,7.15-8,9.6-10.13,10.41l-.14,11h-5.09c-.53-19.73-.67-33.22-.67-33.22h6.1v.72h6.19c.14-2,.24-4.23.24-6.58Zm-7.2,8.93h-6c0,3.36,0,9.51-.2,18.24C556.27,28.27,559.49,22.85,560.69,12.24Zm6.53,0a33.26,33.26,0,0,1-1.68,6.67,18.72,18.72,0,0,1,8.21,7c0-3.88.09-8.44.19-13.63Z"></path></svg>
      <svg data-trigger id="レイヤー_1" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 271.83 101.4" class="online-lesson__headerSvg -sp"><path class="cls-1 svg-online-lesson-heaing-sp-1" d="M83.44,4.55s-2.48,0-5.6-.14c-.14,6.55-.42,20-.42,26.6l-2.55.18c-.88-9.77-1-30.88-1-30.88C79.28,0,83.44,0,83.44,0Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-2" d="M95,30.14s1.86-6.16,1.51-22H101v.45h1V8.16h4.41s0,1.5-.24,21.35c-3.37.38-6.16.49-6.16.49V26.15s.77,0,2.38.07l-.11-4.69H99.79C98,29.33,95,30.14,95,30.14Zm5.08-10.33h2.14c0-1.47,0-2.73-.07-3.88h-1.55C100.49,17.36,100.31,18.66,100.1,19.81Zm.67-5.6h1.36c0-1.71-.07-3-.1-3.88h-1.09C100.91,11.73,100.87,13,100.77,14.21Zm9.52-3.32a19.49,19.49,0,0,0-3.12-5.5s3.64-.94,6.76,4Zm9.52,1.85h4.09s0,1.75-.24,18.13H120.3c0-.38,0-.77,0-1.15h-9a11,11,0,0,0,0,1.15h-3.36c-.35-14.91-.45-18.13-.45-18.13h4.06s0,1.54-.21,15.26h9C119.91,15.54,119.81,12.74,119.81,12.74Zm0,.84a26.31,26.31,0,0,1-2.14,5.18,16.54,16.54,0,0,1,2.14,2.52l-2.77,2A17,17,0,0,0,116,21.32,10.27,10.27,0,0,1,111.34,25a29,29,0,0,0,3.18-5.64,24.65,24.65,0,0,0-3-3.29,7.83,7.83,0,0,1,3.88,1.12,41,41,0,0,0,1.68-5.84Zm-1.33-5.11-3.75,1.3A19.24,19.24,0,0,0,112,4.09S115.71,3.36,118.48,8.47Zm2.69-5.39,3.85,1c-2.06,6.06-7.35,6.17-7.35,6.17A17.14,17.14,0,0,0,121.17,3.08Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-3" d="M144.87,28.6H141c-.49-9.45-.63-21.21-.63-21.21h4.9S145.22,18.2,144.87,28.6Zm7.45-7c-6.19,0-6.51-6.44-6.51-6.44a13,13,0,0,0,6.51,1.54Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-4" d="M183.05,18.31s-.7,7.59-9.8,10.29h-4c-.48-9.45-.62-20.58-.62-20.58h4.9s0,7.21-.18,15.68A15.48,15.48,0,0,0,183.05,18.31Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-5" d="M208.5,31.19c-5.39.31-9.56.31-9.56.31V27s2.48,0,5.6.1c.14-6.54.42-20,.42-26.6l2.56-.18C208.39,10.12,208.5,31.19,208.5,31.19Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-6" d="M0,61.57s4.83-3.43,5.88-11.66l4.76,1.16C8.51,62.27,0,61.57,0,61.57Zm19.88-15V48h-4.3c-.18,4.38-.39,10.54-.39,15.58h-3c-.6-5.43-.91-11.38-1.05-15.58H2.31v-1.4H11l-.11-4.23h4.9s-.1,1.68-.21,4.23h1.47l1.4-1.4Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-7" d="M40.29,48.9A15.69,15.69,0,0,0,34.2,47l0-3.64C40.57,43.72,40.29,48.9,40.29,48.9Zm10.85-.67s3.15,9.17-15.86,14.63L34.2,58.1C47.78,54.36,51.14,48.23,51.14,48.23Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-8" d="M65.94,47s2.87,0,14,.24C80,64.75,67.13,63.6,67.13,63.6s6.69-2.94,7.81-13.34l-9,.32Zm13.69-2.52H67V43.08h9.84l1.4-1.39,1.4,1.39Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-9" d="M93.17,50.23s8-.42,14.11-8.51l3.92,2.94a17.36,17.36,0,0,1-5,4.59c-.17,2.31-.52,7.7-.52,14.35h-2.73c-.67-5.25-1.09-9.84-1.33-12.64A16,16,0,0,1,93.17,50.23Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-10" d="M133.39,48.9a15.69,15.69,0,0,0-6.1-1.89l0-3.64C133.67,43.72,133.39,48.9,133.39,48.9Zm10.85-.67s3.15,9.17-15.86,14.63l-1.09-4.76C140.88,54.36,144.24,48.23,144.24,48.23Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-11" d="M176.75,53.31s-.7,7.59-9.8,10.29H163c-.5-9.45-.63-20.58-.63-20.58h4.9s0,7.21-.18,15.68A15.48,15.48,0,0,0,176.75,53.31Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-12" d="M191.41,47h3.05a32.24,32.24,0,0,0,.73,6.37S191.41,53.66,191.41,47Zm11,2.56h4.09c0,14-12.53,14-12.53,14S202.41,59.15,202.41,49.6ZM196.07,47h3.08a33.55,33.55,0,0,0,.7,6.37S196.07,53.66,196.07,47Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-13" d="M218.68,63.6a21.85,21.85,0,0,0,11.55-17.05c-5,.21-8.37.21-8.37.21V43.19s6.16,0,13.48.25c0,6.19-1.57,10.46-3.75,13.44,2-.32,5.4-.11,9.25,3.29L237.3,63.6A27.48,27.48,0,0,0,230.65,58,17.39,17.39,0,0,1,218.68,63.6Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-14" d="M260.78,48.9A15.62,15.62,0,0,0,254.69,47l0-3.64C261.06,43.72,260.78,48.9,260.78,48.9Zm10.86-.67s3.15,9.17-15.86,14.63l-1.09-4.76C268.28,54.36,271.64,48.23,271.64,48.23Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-15" d="M94.33,90.09s1.19,2.24,5.53,2.24c9.2,0,11.23-1.29,11.23-1.29l.39,4.9s-1.72,1.29-11.62,1.29C92.54,97.23,94.33,90.09,94.33,90.09Zm14.59-6.47a85.42,85.42,0,0,0-12.35-.77V79a97.83,97.83,0,0,1,13,.77ZM110.36,82,112,80.15a3.93,3.93,0,0,1,.91,1.19l1.5-1.71a3,3,0,0,1,.46,4.34A7.78,7.78,0,0,0,113,81.66a3.09,3.09,0,0,1-.6,2.83A8.09,8.09,0,0,0,110.36,82Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-16" d="M139.2,92.75c0,2-.11,4.69-.21,8.12h-4.06c-.11-2-.18-3.78-.25-5.39a14.09,14.09,0,0,1-9.76,4.59,25.7,25.7,0,0,0,6.72-7.32h-6.38V91h9.28c0-.56,0-1-.07-1.37a11.82,11.82,0,0,1-2.38.32,15.41,15.41,0,0,0,3.71-3.29h-2v.45h-4.06c-.14-1.89-.21-3.57-.29-5h-4.2V80.43h4.1c0-.66,0-1.26-.07-1.71h-3.36c-.35-3.93-.46-4.76-.46-4.76h4.41v.49h5.29l-.31-2.07h4.44s0,.24-.14,2.07h5.18V74h3.71c.39,3.92.49,4.76.49,4.76H144.1s0-.28.14-2.56H129.78c0,.35,0,.7,0,1.16h4.3s0,1.05-.07,3.11h11.69l1.4-1.4,1.37,1.4v1.72h-5.18A10.82,10.82,0,0,1,142,85h1.19l1.4-1.4L146,85V86.7h-5.43a10.12,10.12,0,0,1-3.15,2.06h1.82V91h6.44l1.4-1.4,1.37,1.4v1.71ZM137,85a11.65,11.65,0,0,0,1.3-2.83H134c0,.84,0,1.78-.07,2.83ZM149.1,96.57l-2.38,3.5C140,97.16,140,92.93,140,92.93A34,34,0,0,0,149.1,96.57Z"></path><path class="cls-1 svg-online-lesson-heaing-sp-17" d="M174.72,72.42a42.15,42.15,0,0,1-.24,4.79h4.69v-.52h3.71c.35,14.38.45,24.22.45,24.22-3.36.38-6.16.49-6.16.49V97.55l1.75,0c0-1.61,0-3.85.07-6.65l-3.64,1.58a37.72,37.72,0,0,0-3-7.18c-2.35,5.22-5.81,7-7.39,7.6l-.11,8h-3.71c-.38-14.39-.49-24.22-.49-24.22h4.45v.52h4.52c.1-1.47.17-3.08.17-4.79Zm-5.25,6.51h-4.34c0,2.45,0,6.93-.14,13.3C166.25,90.62,168.6,86.66,169.47,78.93Zm4.76,0A24.43,24.43,0,0,1,173,83.79a13.55,13.55,0,0,1,6,5.08c0-2.84.07-6.16.14-9.94Z"></path></svg>
    </h1>
    <div class="online-lesson__mainVisualWrapper">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/main_visual.png" alt="メインビジュアル" class="online-lesson__mainVisual -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/main_visual-sp.png" alt="メインビジュアル" class="online-lesson__mainVisual -sp">
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
        <a href="<?php echo home_url(); ?>/column_category/member_interview/" class="button">
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
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step1_image.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step1_image@2x.jpg" alt="STEP1のイメージ" class="online-lesson__step1Image">
        </div>
        <p class="online-lesson__stepParagraph">ネット環境があれば、<strong>パソコンでもスマホでも、24時間いつでもどこでも見ることが可能。</strong>繰り返し動画を視聴することで、自然と<strong>「サクサク現実を変えていく人の脳内設定」を取り入れることができます。</strong></p>
        <div id="online-lesson__modal">
          <button href="" class="online-lesson__stepsButton" @click="openModal">
            <div class="buttonIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_angle-pink.svg" alt="矢印アイコン"></div>
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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_bubble.png" alt="シャボン玉イラスト" class="online-lesson__stepsBubble -pc">
        <div class="online-lesson__step1_2_roadWrapper">
          <svg data-trigger id="レイヤー_1" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.78 133.34" class="online-lesson__step1_2 -sp"><path class="cls-1 svg-online-lesson-step1-sp-1" d="M36.57,120.41C33,114.29,31.86,107,31.93,100l0,2.14A59.48,59.48,0,0,1,38,76.39l-1.13,2.23a36.3,36.3,0,0,1,6-8.51l-2.08,2.18a36.75,36.75,0,0,1,5.13-4.43L43,69.9a35.64,35.64,0,0,1,4.49-2.67L43.9,69a38.08,38.08,0,0,1,4.34-1.79l-4.16,1.4a45.56,45.56,0,0,1,5.16-1.37l-4.31.87a59.09,59.09,0,0,1,7-.9l-4,.27a142.53,142.53,0,0,1,21.37.61l-3.54-.3A222.33,222.33,0,0,1,100,73.6c8.32,2.08,16.85,3.93,25.48,3.7A68.32,68.32,0,0,0,147.7,73a44.25,44.25,0,0,0,8.35-4.16,43.54,43.54,0,0,0,7.3-5.65,45.23,45.23,0,0,0,5.93-7,52.28,52.28,0,0,0,3.85-7.24,51.31,51.31,0,0,0,3.66-12.62c1.72-10.45,1.35-21.87-2.32-31.88-.93-2.55-3.64-3.57-6.08-4a27,27,0,0,0-11.86.82c-3.72,1.08-7.8,2.53-10.68,5.22-1.64,1.52-4.18,4-3.25,6.55a57.08,57.08,0,0,1,3.18,20.49l0-2.15c-.18,8.13-1.69,16.42-5.38,23.72l1.13-2.22a34.38,34.38,0,0,1-5.44,7.77l2.08-2.19a28.94,28.94,0,0,1-3.83,3.33l2.91-2a25.65,25.65,0,0,1-3.27,2l3.6-1.78a26.88,26.88,0,0,1-3.14,1.29l4.17-1.4a33.06,33.06,0,0,1-3.25.86l4.31-.87a34,34,0,0,1-4.26.55l4-.26a45,45,0,0,1-6.57-.11l3.54.31a94.13,94.13,0,0,1-13.54-2.42c-6.17-1.49-12.32-3-18.57-4.1-7.9-1.41-15.85-2.29-23.84-2.93a148.73,148.73,0,0,0-18.16-.59,94.84,94.84,0,0,0-11,.94A90.17,90.17,0,0,0,35.9,55a56.78,56.78,0,0,0-10.23,4.8,49.39,49.39,0,0,0-9.39,7,48.68,48.68,0,0,0-6.45,7.38A56.56,56.56,0,0,0,5.6,81.93,58,58,0,0,0,1.18,95.77a66.38,66.38,0,0,0-.9,18.45A35.46,35.46,0,0,0,4.69,129a3.81,3.81,0,0,0,2.15,2.52A7.29,7.29,0,0,0,10.78,133a27,27,0,0,0,11.86-.83c3.72-1.08,7.8-2.53,10.68-5.21l2.09-2.19a5.17,5.17,0,0,0,1.16-4.36Z"></path></svg>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_snake-sp.png" alt="蛇イラスト" class="online-lesson__stepsSnake -sp">
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_trees.png" alt="木イラスト" class="online-lesson__stepsTrees -pc">
      <svg data-trigger id="レイヤー_1" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 297.6 399.84" class="online-lesson__step1_2 -pc"><path class="cls-1 svg-online-lesson-step1-1" d="M126.76,13.41A57.88,57.88,0,0,1,123,19.77l1.68-2.47a74.43,74.43,0,0,1-13.47,14.61l3-2.51a118.66,118.66,0,0,1-11,8.11c-2,1.3-4,2.54-6,3.76-1.53.93,3.82-2.26,3-1.81l-.82.48-1.44.83C97,41.36,96,42,94.93,42.52,86.8,47,78.42,51,70.05,55,53.8,62.76,36.49,70.55,24.19,84.12,15.5,93.7,7.35,104.73,3.07,117.05c-4,11.42-4.31,24.2.27,35.47C13,176.36,37,189.93,60.83,195.91c13.89,3.49,28.27,5.31,42.5,6.74,18.45,1.84,38.3-.84,54.41-10.41,6-3.58,12.42-8.91,14-16.12a21,21,0,0,0-2.88-16.46,28.72,28.72,0,0,0-6.42-7.34,36.89,36.89,0,0,0-9.89-5.07c-8.14-2.88-17.4-3.24-25.93-2.77-31,1.7-62,14-85,35.05-18.06,16.52-31.54,41.22-30.2,66.21,1.2,22.48,17.94,40.18,36.64,50.74,23.53,13.28,50.11,18.06,76.41,22.66,6.8,1.19,13.6,2.34,20.39,3.56l-3.83-.69c21.22,3.83,42.49,8.47,62,17.85l-2.7-1.3c16.89,8.18,32.58,19.58,43.54,35l-1.34-1.9A76.08,76.08,0,0,1,254,395.8c.79,2.94,5.61,3.66,7.87,3.89a45,45,0,0,0,16-1.8c5.06-1.44,10.52-3.2,14.74-6.44,2.1-1.6,5.71-4.17,4.87-7.3-5.54-20.77-20.25-38.1-37.64-50.21-19.7-13.72-42.59-21.52-65.87-26.56-15.91-3.44-32-5.9-48-8.79l3.83.69c-19.51-3.54-39.26-7.56-57.23-16.23l2.7,1.3C82.8,278.28,71.07,270.08,63,258.69l1.34,1.9a51.73,51.73,0,0,1-9.18-34.77l-.21,2.31c1.34-13.25,6.57-25.93,14-36.91l-1.68,2.48a95.22,95.22,0,0,1,17-18.79l-3,2.52c2.12-1.78,4.31-3.48,6.57-5.07,1.06-.74,2.13-1.47,3.21-2.17.62-.4,1.25-.78,1.87-1.17,2.31-1.45-4.9,2.84-1.68,1q3.34-1.92,6.86-3.57l1-.46q2.73-1.23-3.46,1.51l2-.85c1.19-.48,2.4-.94,3.61-1.38l2.09-.71c-.06,0-7,2.2-3.6,1.16q2.11-.63,4.26-1.17l1.61-.38q3.19-.72-4.24.91l1.09-.22q1.89-.37,3.81-.66l2.19-.29q3-.36-3.76.41l1.11-.11c1.46-.13,2.93-.22,4.4-.26.82,0,4,0,.17,0s-.66,0,.16.07a49.39,49.39,0,0,1,5,.59l-3.83-.69a34.78,34.78,0,0,1,8.28,2.59l-2.7-1.3a23.68,23.68,0,0,1,9,7.37L125,170.65a20,20,0,0,1,3.86,12.78l.21-2.31a15.71,15.71,0,0,1-2.47,7l1.69-2.48a17.09,17.09,0,0,1-3,3.35l3-2.51c-.35.28-.7.56-1.06.82-2.31,1.64,2.43-1.39,2.55-1.45-.41.2-.81.43-1.21.64-2.35,1.23,5.81-2.35,3.29-1.45l-.66.24q-2.71,1,4.58-1.46l-1.38.39c-2.82.8,6.86-1.34,3.95-.84-.48.09-1,.18-1.45.25l-1.49.21c.08,0,6.65-.65,3.4-.41-.93.07-1.87.11-2.8.13-.51,0-1,0-1.54,0-1.95,0,5.68.12,2.69,0-1,0-2-.09-3-.16a287.48,287.48,0,0,1-30.66-3.95l3.83.69c-10.93-2-21.7-4.88-31.76-9.68l2.7,1.3A70.72,70.72,0,0,1,51.53,149.9l1.34,1.89c-6.63-9.37-10.2-20.36-9.24-31.89l-.21,2.32c1-10.78,5.68-20.68,11.69-29.56l-1.68,2.48C57.92,88.6,63.05,82,69.13,76.83l-3,2.51a71.31,71.31,0,0,1,7.72-5.53l1-.58.49-.3c1.84-1.13-3.76,2.22-3.09,1.84l2.35-1.36c1.58-.89,3.18-1.75,4.78-2.59,7.14-3.75,14.46-7.14,21.72-10.63,17.8-8.56,35.29-17.85,50.34-30.79a75.55,75.55,0,0,0,18.38-23c1.44-2.84-1.73-4.79-3.82-5.51-4.06-1.4-9.92-.88-14-.16A54.72,54.72,0,0,0,135.48,6c-3.35,1.82-6.93,3.86-8.72,7.4Z"></path></svg>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_snake.png" alt="蛇イラスト" class="online-lesson__stepsSnake -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_kusa.png" alt="草イラスト" class="online-lesson__stepsKusa -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_flower.png" alt="花イラスト" class="online-lesson__stepsFlower -pc">
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
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_icon.svg" alt="STEP2アイコン" class="online-lesson__step2Icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_image.jpg" alt="STEP2イメージ" class="online-lesson__step2Image">
        </div>
        <p class="online-lesson__stepParagraph">現実をダイナミックに動かすためには、その人<strong>専用に個別カスタマイズされたアドバイス・サポートが必須</strong>です。ただ知識を入れるだけではなく、<strong>直接メンターに相談することでインプットとアウトプットを行います。</strong></p>
        <div class="online-lesson__chargeWrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/charge.svg" alt="担当" class="online-lesson__chargeImage">
          <div>
            <a href="<?php echo home_url('/profile/#saki'); ?>" class="online-lesson__charger">
              <div class="online-lesson__chargerIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
              <span class="online-lesson__chargeName">saki</span>
            </a>
          </div>
          <div>
            <a href="<?php echo home_url('/profile/#mii'); ?>" class="online-lesson__charger">
              <div class="online-lesson__chargerIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
              <span class="online-lesson__chargeName">みい</span>
            </a>
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
          <svg data-trigger id="レイヤー_1" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 167.48 144.31" class="online-lesson__step2_3 -sp"><path class="cls-1 svg-online-lesson-step2-sp-1" d="M133.06,18.94a19.93,19.93,0,0,1,1.44,2.39l-1.36-2.79a22.62,22.62,0,0,1,2.12,8.32l-.22-3.1a33,33,0,0,1-1.3,11l.9-3.08a34,34,0,0,1-4,8.77l1.89-2.91A25.71,25.71,0,0,1,129,41.85l2.76-2.6a28.14,28.14,0,0,1-4.4,3.36l3.51-2.14a32.22,32.22,0,0,1-5.32,2.58l4.13-1.53a41,41,0,0,1-7.14,1.87l4.35-.74a115.3,115.3,0,0,1-16.29,1.1l-20,.5c-13.77.34-27.78.52-41.09,4.52s-25.18,11-34.35,21.29A60.25,60.25,0,0,0,1.32,122.62,42.18,42.18,0,0,0,9,139.49c2.16,2.77,5.72,4.21,9.1,4.66A22.66,22.66,0,0,0,30.63,142c3.22-1.7,6.77-4.12,8.16-7.65,1.17-3,1.42-6.27-.68-9a30.8,30.8,0,0,1-3.39-5.47l1.36,2.79a43,43,0,0,1-3.83-15.42l.22,3.1a53.62,53.62,0,0,1,2-18.26l-.9,3.07a49.45,49.45,0,0,1,5.82-12.61l-1.89,2.91a50.36,50.36,0,0,1,7.54-9l-2.76,2.59a52.11,52.11,0,0,1,8.36-6.34L47.1,74.87A53.82,53.82,0,0,1,56,70.58l-4.13,1.54A69.17,69.17,0,0,1,63.62,69l-4.34.74c9.51-1.61,19.19-1.64,28.81-1.88s19-.23,28.52-.78c12-.69,23.84-3.69,33.68-10.79a42.24,42.24,0,0,0,11.15-12.41,44,44,0,0,0,4.8-12.1c2.43-8.94,1.41-19.29-4-27-2-2.78-5.9-4.23-9.1-4.65a22.66,22.66,0,0,0-12.58,2.17c-3.22,1.7-6.77,4.12-8.16,7.64-1.21,3-1.31,6.15.68,9Z"></path></svg>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_kusa-sp.png" alt="草イラスト" class="online-lesson__stepsKusa -sp">
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_butterfly.png" alt="蝶々イラスト" class="online-lesson__stepsButterfly -pc">
      <svg data-trigger id="レイヤー_1" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 298.44 344.24" class="online-lesson__step2_3 -pc"><path class="cls-1 svg-online-lesson-step2-1" d="M168,29.72,238,77c5.64,3.81,11.84,7.31,16.69,12.12l-3.19-3.16a20,20,0,0,1,3.7,5.06l-1.89-4a13.88,13.88,0,0,1,1.27,4.82l-.34-4.38a14.9,14.9,0,0,1-.48,4.36L255,87.48a20.86,20.86,0,0,1-2.26,5l2.54-4.09a32.71,32.71,0,0,1-4.56,5.54l3.74-3.63a63.41,63.41,0,0,1-10.5,8.09l4.77-3a97,97,0,0,1-16.76,8l5.63-2.11c-19.91,7.43-41.29,11-60.14,21.24-5.82,3.14-11.72,6.64-16.58,11.17a56.26,56.26,0,0,0-8.5,9.15c-2.11,3.1-4.4,6.49-5.55,10.14s-2.16,7.11-1.93,10.89c.2,3.41.37,6.58,1.74,9.71a34.09,34.09,0,0,0,4.44,8,52.54,52.54,0,0,0,6.65,6.69c6.59,5.68,14.83,9.12,21.07,15.24l-3.2-3.17a24.84,24.84,0,0,1,4.66,6.34l-1.9-4a20.76,20.76,0,0,1,1.95,7l-.35-4.38a22.26,22.26,0,0,1-.77,7.44l1.18-4.34a31.87,31.87,0,0,1-3.64,8l2.55-4.1A50.16,50.16,0,0,1,172,221.2l3.74-3.64a66.75,66.75,0,0,1-10.72,8.37l4.77-3c-10.09,6.28-21.46,10.75-32.55,14.92l5.63-2.11c-22,8.24-44.65,14.73-66.24,24a206,206,0,0,0-27.38,14.43c-4.7,2.93-9.31,5.95-13.69,9.33A156.52,156.52,0,0,0,21.74,296,104.74,104.74,0,0,0,1.19,324.64a13,13,0,0,0,1.05,12.7c2.67,3.76,8,6.22,12.51,6.71C25.58,345.24,38,340.7,43,330.45c1.26-2.58,2.65-5.08,4.16-7.52L44.58,327a94.78,94.78,0,0,1,14-17.23l-3.74,3.64A128.65,128.65,0,0,1,76.1,297l-4.76,3c11.93-7.43,24.77-13.17,37.9-18.11L103.61,284c27.14-10.18,55.58-17.59,81.32-31.18,14.27-7.53,27.09-18.22,34.81-32.6,6.53-12.18,6-28.18-3.75-38.58a74,74,0,0,0-14.54-11.87c-4.16-2.66-8.43-5.25-12-8.7l3.2,3.17a21.8,21.8,0,0,1-4.34-5.89l1.9,4a17.6,17.6,0,0,1-1.54-5.63l.34,4.39a17.79,17.79,0,0,1,.56-5.9l-1.19,4.35a23.67,23.67,0,0,1,2.67-5.91l-2.54,4.09a34.35,34.35,0,0,1,4.92-6l-3.74,3.64a49,49,0,0,1,8-6.12l-4.77,3a101,101,0,0,1,17.42-8.35L204.72,146c11.53-4.3,23.52-7.17,35.18-11.05,14.66-4.88,29.44-10.94,41.29-21.12,8.15-7,16.14-16,17.2-27.24a24.12,24.12,0,0,0-.14-4.16,29.24,29.24,0,0,0-.43-4.08,28.62,28.62,0,0,0-3.43-7.89c-2.13-3.7-5.55-6.75-8.81-9.44-2.64-2.18-5.53-4-8.37-5.95L267,48.11l-20-13.5L201.28,3.8A24.07,24.07,0,0,0,186.36.05a23.44,23.44,0,0,0-8.75,2,21.85,21.85,0,0,0-7.58,4c-3.53,3-7.3,7.15-7.47,12.07-.15,4.53,1.53,8.89,5.44,11.53Z"></path></svg>
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
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step3_icon.svg" alt="step3アイコン" class="online-lesson__step3Icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step3_image.jpg" alt="step3イメージ" class="online-lesson__step3Image">
        </div>
        <p class="online-lesson__stepParagraph">
          今まで投稿されたメンバーからの相談を公開しています。<br />
          <strong>相談件数は500件超</strong>。相談投稿に対して、江藤有紀を含む、今は<strong>予約も取れないセッション提供者から返信</strong>をしています。過去のメンバーからのリアルな相談と、それに対しての回答は、あなたの<strong>オーダーを通すヒントの宝庫</strong>です。
        </p>
        <svg data-trigger id="レイヤー_1" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 155.37 172.73" class="online-lesson__step3_4 -sp"><path class="cls-1 svg-online-lesson-step3-sp-1" d="M10.58,10.44C7.46,16.66,3.52,22.67,1.3,29.3A25,25,0,0,0,.07,39.17a18.62,18.62,0,0,0,3,8.29A46.49,46.49,0,0,0,12.32,58.2a60.68,60.68,0,0,0,6.52,5.12A30.69,30.69,0,0,0,29.7,67.67c5.8,1.27,11.89.84,17.78.55s11.9-.41,17.85-.6L85.7,67c6.46-.21,12.94-.52,19.41-.14l-3.52-.22a64.48,64.48,0,0,1,11.23,1.66L110,67.52a36.31,36.31,0,0,1,9.41,3.62l-2-1.22a14.87,14.87,0,0,1,4.77,4.57L121,72.8a18.72,18.72,0,0,1,2.46,10.46l.08-2A28.36,28.36,0,0,1,120.1,93.8l1.16-2.08A20.05,20.05,0,0,1,118,96L120.14,94A23.9,23.9,0,0,1,117,96.54l2.93-1.94a26,26,0,0,1-2.72,1.54l3.62-1.72A29,29,0,0,1,118,95.56l4.17-1.38a38.16,38.16,0,0,1-4,1.07l4.3-.89c-4.79,1-9.71,1.23-14.56,1.7L90.68,97.71,56.4,101c-11.67,1.12-24,1.4-34.9,6.1a43.66,43.66,0,0,0-10.8,6.22A25,25,0,0,0,5,119.62a26.93,26.93,0,0,0-3.38,7.83,39,39,0,0,0-.77,8.63C.89,147.75,6.66,158,10,168.85c.73,2.41,3.88,3.29,6,3.63a28.74,28.74,0,0,0,11.81-1c3.72-1.08,7.77-2.46,10.73-5.05,1.65-1.43,4.11-3.63,3.36-6.13-1.78-5.9-4.33-11.53-6.28-17.37a48.13,48.13,0,0,1-2.76-16.85l-.08,2a24.28,24.28,0,0,1,2.69-10.61l-1.16,2.08A17.24,17.24,0,0,1,37,115.89L34.88,118a17,17,0,0,1,2.28-1.86L34.22,118a20.15,20.15,0,0,1,2.22-1.26l-3.62,1.72a24,24,0,0,1,2.35-1L31,118.93a31.92,31.92,0,0,1,3.36-.89l-4.3.89a95.15,95.15,0,0,1,9.52-1.17l12.91-1.24L78.57,114l25.83-2.49c9.67-.93,19.49-1.92,28.43-6,5.89-2.71,11.46-6,15.69-11a30.7,30.7,0,0,0,5.11-9.19,33.29,33.29,0,0,0,1.73-10.53,20,20,0,0,0-1.42-8.5,20.59,20.59,0,0,0-3.33-5.3,21.4,21.4,0,0,0-5.75-4.22c-3.93-2.26-8.42-3.39-12.79-4.43-8.63-2.05-17.74-2-26.56-1.79-16.65.48-33.29,1.11-49.93,1.73-1.73.07-3.46.08-5.2,0l3.52.22a28.39,28.39,0,0,1-5-.74l2.86.73a18.66,18.66,0,0,1-4.68-1.91l2.05,1.22a57.74,57.74,0,0,1-9.38-7.56,38.76,38.76,0,0,1-5.87-6.92l1.06,1.68a17.83,17.83,0,0,1-3-10.25l-.08,2c.19-4,1.72-7.77,3.44-11.33,2.21-4.55,4.75-8.93,7-13.45,1.11-2.21-1.43-4.2-3-4.89-3-1.28-7.34-1.12-10.38-.63a34.07,34.07,0,0,0-12.09,4L13.86,6.29a9.39,9.39,0,0,0-3.28,4.15Z"></path></svg>
      </div>
      <svg data-trigger id="レイヤー_1" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 263.52 269.99" class="online-lesson__step3_4 -pc"><path class="cls-1 svg-online-lesson-step3-1" d="M74,3.25a152.29,152.29,0,0,0-17.51,9,109.35,109.35,0,0,0-12,8.19A148.88,148.88,0,0,0,30,33,144.67,144.67,0,0,0,18,47.16,97.16,97.16,0,0,0,2.17,77.54c-3.23,10.68-3.07,22.88,1.93,33a61.78,61.78,0,0,0,9.47,14.37,97.18,97.18,0,0,0,13.36,11.86,147,147,0,0,0,26.2,15.58c19.93,9.48,41.12,15.86,62.45,21.35,20.41,5.25,41.06,9.77,61.09,16.4,2.54.84,5.06,1.73,7.54,2.72l-4.08-1.63a62.76,62.76,0,0,1,16,9l-3-2.41a59,59,0,0,1,14.67,18.11l-1.68-3.13c6.28,11.77,9.47,24.91,11.83,38,.68,3.76,1.29,7.54,1.87,11.32a6.9,6.9,0,0,0,3.17,4.34,10.74,10.74,0,0,0,5.58,2.84,21.73,21.73,0,0,0,7.69.72,27.43,27.43,0,0,0,8.66-1.16c5.12-1.52,10.72-3.75,14.38-7.8L262,257.5a9.25,9.25,0,0,0,1.27-7.13c-2-12.67-4.17-25.42-8.52-37.52a97.45,97.45,0,0,0-9.65-19.66,59,59,0,0,0-5.54-7.33,73,73,0,0,0-9.32-8.43c-6.93-5.51-15.15-8.88-23.4-11.88-7-2.55-14.24-4.63-21.43-6.63-14.21-3.95-28.56-7.3-42.84-11a414.17,414.17,0,0,1-42-12.66c-1.71-.64-3.4-1.29-5.1-2L99.57,135c-14.23-5.69-28.34-12.75-40.35-22.39l3,2.42c-6.29-5.1-12-11-15.81-18.23l1.67,3.13a37.65,37.65,0,0,1-4.38-16.2l.12,3.55a48.69,48.69,0,0,1,3.61-18.72L46,72.1A95.67,95.67,0,0,1,60.13,48.22l-2.72,3.45A112.23,112.23,0,0,1,74.53,34.34l-3.88,3.14A111.93,111.93,0,0,1,87,26.51l-4.85,2.66Q87,26.53,92,24.37a22.39,22.39,0,0,0,6.79-4.22,15.67,15.67,0,0,0,4.65-5c1.71-3.08,2.25-7.43-.4-10.26-3-3.23-7.69-4.65-12-4.83A39.54,39.54,0,0,0,74,3.25Z"></path></svg>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_bird.png" alt="鳥イラスト" class="online-lesson__stepsBird -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_flamingo.png" alt="フラミンゴイラスト" class="online-lesson__stepsFlamingo -pc">
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
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step4_icon.svg" alt="step4アイコン" class="online-lesson__step4Icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step4_image.jpg" alt="step4イメージ" class="online-lesson__step4Image">
        </div>
        <p class="online-lesson__stepParagraph">
          現役メンバーはもちろん卒業メンバーも含め、<strong>オーダーが通った報告や、現実が動いている進捗シェアコーナー</strong>を設けています。<br />
          表にはなかなか出てこない、<strong>オーダーを通している最中のリアルな情報</strong>を知ることができます。ぜひ読むだけではなく、ご自身のシェアも投稿してみてくださいね。
        </p>
        <svg data-trigger id="レイヤー_1" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 199.19 121.71" class="online-lesson__step4_5 -sp"><path class="cls-1 svg-online-lesson-step4-sp-1" d="M40.9,109.31a32.89,32.89,0,0,1-5.64-7.52L36.45,104A39.49,39.49,0,0,1,31.79,86l.05,2.47a39.7,39.7,0,0,1,3-15.45l-1,2.51a43.93,43.93,0,0,1,6.65-11l-2,2.43a48.21,48.21,0,0,1,7.21-7l-2.86,2.22a49.21,49.21,0,0,1,6.73-4.39l-3.57,1.9a52.37,52.37,0,0,1,7.42-3.2L49.18,58a70.24,70.24,0,0,1,9.14-2.41L54,56.43a150.94,150.94,0,0,1,22.86-2.07l-4,.14c19.51-.68,39-1.74,58.4-3.68,9.7-1,19.54-1.83,29-4.28a73.37,73.37,0,0,0,17.86-7.31,52.36,52.36,0,0,0,7.11-5.1,30.94,30.94,0,0,0,3.72-3.61,50.12,50.12,0,0,0,5.25-6.89,44.87,44.87,0,0,0,3.52-7.73A31.21,31.21,0,0,0,199,1.7c-.31-2.69-4.23-4.37-6.32-4.91a24.31,24.31,0,0,0-11.95.47C177-1.63,172.91-.06,170.16,2.83l-2,2.43a6.3,6.3,0,0,0-1,5c.09.79.15,1.58.17,2.37l0-2.46a27.06,27.06,0,0,1-2,10.62l1.05-2.51a32.24,32.24,0,0,1-4.73,7.84l2-2.43a32.2,32.2,0,0,1-4.77,4.64l2.86-2.23a33.51,33.51,0,0,1-4.45,2.84L160.78,27a41.87,41.87,0,0,1-5.5,2.38L159.44,28A60.07,60.07,0,0,1,151.61,30l4.32-.83c-8.69,1.65-17.62,2.31-26.43,3.12q-14.22,1.32-28.5,2.11-8.06.45-16.12.74l4-.14c-10.25.36-20.61.42-30.72,2.31C46.41,39.53,34.73,43.05,24.77,50,17.19,55.25,10.29,62,5.82,70.14A51,51,0,0,0,.89,82.73,46.73,46.73,0,0,0,0,96.59,39.41,39.41,0,0,0,3.21,109.7a40,40,0,0,0,8.2,12.47c2.29,2.26,5.59,3.06,8.71,3.24A27.79,27.79,0,0,0,32.64,123c3.09-1.45,6.8-3.41,8.45-6.55,1.18-2.22,1.89-5.09-.19-7.13Z"></path></svg>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_leafs.png" alt="葉イラスト" class="online-lesson__stepsLeafs -pc">
      <svg data-trigger id="レイヤー_1" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 268.38 261.39" class="online-lesson__step4_5 -pc"><path class="cls-1 svg-online-lesson-step4-1" d="M192.7,3.47C189.12,4.7,185.54,5.94,182,7.38a99.47,99.47,0,0,0-14.62,7.26,86.28,86.28,0,0,0-8.12,5.69,61.55,61.55,0,0,0-6.51,6.31,39.35,39.35,0,0,0-6.86,11.12A30.4,30.4,0,0,0,143.73,50a18.79,18.79,0,0,0,2.16,9.33c2,3.63,4.23,6.78,7.66,9.12a45,45,0,0,0,11.06,5.76c9.08,3.07,18.59,4.53,27.8,7.16l-3.95-1.14a177.51,177.51,0,0,1,17.39,6,92.8,92.8,0,0,1,15.25,7.29l-2.83-1.84a19.93,19.93,0,0,1,6.29,6.14l-1.5-2.48a13.26,13.26,0,0,1,1.79,6.74l.06-2.9a15.63,15.63,0,0,1-1.77,6.51l1.54-3a25.09,25.09,0,0,1-4.11,5.6l2.85-3a38.14,38.14,0,0,1-5.64,4.75l4-2.76a45,45,0,0,1-5.33,3.12l4.92-2.41a95.91,95.91,0,0,1-11.32,4.5l5.68-1.91a140.91,140.91,0,0,1-16.29,4.29l5.87-1.19a239.12,239.12,0,0,1-30.65,3.78l5.47-.37c-17.76,1.18-35.58,1.38-53.29,3.2a213.67,213.67,0,0,0-52.66,12,125.32,125.32,0,0,0-23.41,11.45,119.36,119.36,0,0,0-12.1,8.65,102.7,102.7,0,0,0-10.2,9.92c-5.6,6.09-9.78,13-13.5,20.38A106,106,0,0,0,7.27,203c-3.89,14.37-5.42,29.25-6.57,44-.14,1.85-.28,3.69-.41,5.54A4,4,0,0,0,1,256.75a5.43,5.43,0,0,0,3.59,3.08,16.82,16.82,0,0,0,6.36,1.34A26.3,26.3,0,0,0,18.8,261c5.67-.87,11.59-2.44,16.48-5.51l4-2.76a12.84,12.84,0,0,0,4.39-6c1.37-18.76,3-37.82,8.83-55.8a100.34,100.34,0,0,1,5.91-14.36l-1.54,3a77.87,77.87,0,0,1,12.9-18.31l-2.85,3a77.58,77.58,0,0,1,11.66-9.9l-4,2.76a90.29,90.29,0,0,1,11.58-6.74l-4.92,2.41a112.58,112.58,0,0,1,13.28-5.4l-5.68,1.91a147,147,0,0,1,17.43-4.61l-5.88,1.18a230.32,230.32,0,0,1,29.84-3.81l-5.47.37c31.4-2.12,63.44-1.4,93.83-10.81,9.58-3,19.58-6.36,28.15-11.69a61.28,61.28,0,0,0,11-8.31,56.09,56.09,0,0,0,5.3-5.8,36.62,36.62,0,0,0,3.62-6.36A19.61,19.61,0,0,0,268.27,89c-.31-3.56-2.28-7-4.49-9.66-2.49-3.06-6.15-5.24-9.51-7.17A90.31,90.31,0,0,0,245.58,68a203.27,203.27,0,0,0-26.72-9.35c-6.94-2-14.06-3.14-21-5.13l3.95,1.14a39.3,39.3,0,0,1-10.06-4.3l2.83,1.83a20.41,20.41,0,0,1-6.46-6.55l1.49,2.48a18.75,18.75,0,0,1-2.42-9.8l-.06,2.9A26.24,26.24,0,0,1,190,30.41l-1.54,3a29.64,29.64,0,0,1,4.86-6.88l-2.85,3A38.51,38.51,0,0,1,196,24.83l-4,2.76a54.89,54.89,0,0,1,7-4.09l-4.92,2.41a136.53,136.53,0,0,1,15.36-6,26.06,26.06,0,0,0,6.9-3.79,16.71,16.71,0,0,0,4.84-4.34c1.69-2.44,2.67-6,.1-8.39l-2.84-1.83A22.64,22.64,0,0,0,209.72,0l-5.46.37A48,48,0,0,0,192.7,3.47Z"></path></svg>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_apple.png" alt="りんごイラスト" class="online-lesson__stepsApple -pc">
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
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step5_icon.svg" alt="step5アイコン" class="online-lesson__step5Icon">
        </div>
        <p class="online-lesson__stepParagraph"><strong>リアルタイムでオーダーを通しているサンプル</strong>をコラムでお届けします。</p>
        <div class="online-lesson__chargeWrapper -step5">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/charge.svg" alt="担当" class="online-lesson__chargeImage">
          <div class="online-lesson__chargerWrapper">
            <div>
              <a href="<?php echo home_url('/profile/#etoh'); ?>" class="online-lesson__charger">
                <div class="online-lesson__chargerIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
                <span class="online-lesson__chargeName">江藤有紀</span>
              </a>
            </div>
            <div>
              <a href="<?php echo home_url('/profile/#obara'); ?>" class="online-lesson__charger">
                <div class="online-lesson__chargerIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
                <span class="online-lesson__chargeName">小原彩夏</span>
              </a>
            </div>
          </div>
        </div>
        <svg data-trigger id="レイヤー_1" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 139.97 149.68" class="online-lesson__step5_6 -sp"><path class="cls-1 svg-online-lesson-step5-sp-1" d="M37.42,1.27c-6.6,2.14-13.1,4.81-18.34,9.49a49.46,49.46,0,0,0-9.42,11c-5.54,9-10.8,19.93-9.44,30.81a21.53,21.53,0,0,0,1.85,6.58A15.89,15.89,0,0,0,6.27,65c6,4.65,14.13,3.86,21.29,3.75l34.36-.54,19.18-.3c5.9-.1,11.86-.45,17.76-.19l-3.5-.17a23.37,23.37,0,0,1,3.81.49l-2.85-.67a15.56,15.56,0,0,1,4.05,1.55l-2-1.16a16.54,16.54,0,0,1,5.39,5.2l-1-1.61c4.1,6.42,5.61,14.62,5.3,22.14l.09-1.92A33.66,33.66,0,0,1,103.53,107l1.18-2c-3.1,5.23-7.26,9.89-9.42,15.64a44.09,44.09,0,0,0-2.6,18.24,16,16,0,0,0,3.23,8.8,6.74,6.74,0,0,0,3.46,1.48,13.62,13.62,0,0,0,4.93.51A35.3,35.3,0,0,0,116.77,147c3-1.27,6.77-2.84,8.71-5.6l1.18-2a3.11,3.11,0,0,0-.94-3.52c-.14-.18-.27-.37-.39-.56l1,1.61c-1.89-3.12-2-7.12-1.82-10.67l-.1,1.92c.32-5.48,1.52-11.31,4.31-16.1l-1.18,2c1.91-3.23,4.24-6.19,6.19-9.4a38.14,38.14,0,0,0,5.52-13.48c1.56-9.07.52-19.59-4.24-27.63a24,24,0,0,0-4.33-5.72,20.69,20.69,0,0,0-7.3-4.21c-6-1.94-12.33-1.78-18.59-1.68l-34.12.53-18.92.3c-6.2.1-12.47.49-18.66.24l3.5.17a13.77,13.77,0,0,1-2.22-.29l2.85.67a9.82,9.82,0,0,1-2.17-.83l2,1.15a9.83,9.83,0,0,1-3.23-3.12l1,1.6a21.94,21.94,0,0,1-3-12.42l-.1,1.92a37.92,37.92,0,0,1,2.8-11.43A71.48,71.48,0,0,1,39.56,20l-1.18,2a43.49,43.49,0,0,1,7.3-9.45l-2.13,2a27.84,27.84,0,0,1,3.77-3l-3,1.9a22.77,22.77,0,0,1,2.42-1.33L43.17,13.9c.56-.25,1.13-.48,1.72-.68l-4.17,1.37.24-.08c3.73-1.21,7.63-2.47,10.76-5,1.3-1,4.26-3.74,3.41-5.93C54.22,1.27,51.47.46,49.21.19A28.63,28.63,0,0,0,37.42,1.27Z"></path></svg>
      </div>
      <svg data-trigger id="レイヤー_1" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 226.05 220.41" class="online-lesson__step5_6 -pc"><path class="cls-1 svg-online-lesson-step5-1" d="M1.12,14.2c-3,17.21.31,34.82,7.45,50.61C16.14,81.56,27.76,96.13,41,108.71s28.57,23.43,43.79,33.86c16,11,32,21.94,47.38,33.73q23.65,18.07,45.92,37.9l5.6,5a9.62,9.62,0,0,0,4.43,1,24.55,24.55,0,0,0,6.52-.09,69.2,69.2,0,0,0,16.91-3.88l5-2a31.47,31.47,0,0,0,7.21-4.24l1.81-2a2.1,2.1,0,0,0-.86-3.19,794,794,0,0,0-61.67-50.58c-10.36-7.66-21-15-31.59-22.25-10.28-7-20.57-14-30.43-21.61A208.44,208.44,0,0,1,70.7,82.44l1.2,1.39c-15-17.35-26.47-39-28.24-62.18a76.86,76.86,0,0,1,.93-19.1C45,.22,37.31,0,37.08,0A56.26,56.26,0,0,0,21.24,2.37c-5.06,1.42-10.42,3-14.89,5.87L3.28,10.37A4.3,4.3,0,0,0,1.12,14.2Z"></path></svg>
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
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step6_icon.svg" alt="step6アイコン" class="online-lesson__step6Icon">
        </div>
        <p class="online-lesson__stepParagraph"><strong>不定期でゲストを迎えたセミナー</strong>を開催します。（東京対面・録画あり）</p>
        <svg data-trigger id="レイヤー_1" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96.77 171.52" class="online-lesson__step6_end -sp"><path class="cls-1 svg-online-lesson-step6-sp-1" d="M30.43,2.59A62.42,62.42,0,0,0,12,13.79a55.72,55.72,0,0,0-6.88,7.28,25.67,25.67,0,0,0-4.68,8.4A12.75,12.75,0,0,0,4.6,42.55a32.38,32.38,0,0,0,12.33,6.32c6.8,2,13.8,3.32,20.66,5.11l-2.88-.75q7.42,1.94,14.76,4.15C53.64,58.64,58,59.74,61.84,62l-2.06-1.25a13.76,13.76,0,0,1,4.36,4.06l-1.07-1.71A12.25,12.25,0,0,1,64.85,70l.07-2a19.73,19.73,0,0,1-2.46,8.3l1.16-2.1a25.7,25.7,0,0,1-4.21,5.63l2.11-2.09c-5.06,5-11.39,8.38-16.47,13.33a47.22,47.22,0,0,0-5.3,5.75,46.52,46.52,0,0,0-3.65,6.15,36.36,36.36,0,0,0-3.33,9.78,53.85,53.85,0,0,0,0,19.85,162.51,162.51,0,0,0,4.41,17.24c1.8,6,3.76,11.9,5.89,17.75.9,2.44,3.71,3.32,6,3.71a28.44,28.44,0,0,0,11.82-1c3.72-1.07,7.78-2.47,10.72-5.07,1.59-1.4,4.23-3.77,3.34-6.21-2-5.51-3.87-11.09-5.58-16.7a161.21,161.21,0,0,1-4.8-18.73,50.26,50.26,0,0,1-.76-10.39l-.07,2A39.79,39.79,0,0,1,68.3,97.54l-1.16,2.11A31.21,31.21,0,0,1,72.21,93L70.1,95.05C74.72,90.5,80.4,87.28,85.22,83a36.28,36.28,0,0,0,7.45-8.48c1.77-3,3.41-6.14,3.87-9.65.41-3.13.41-6.55-1.07-9.42a18,18,0,0,0-3.25-4.64,25,25,0,0,0-5.42-3.67,47.78,47.78,0,0,0-8.91-3.34q-5.46-1.7-11-3.23-7.29-2-14.64-3.85C48.51,35.77,44.7,35,41,34l2.87.75a35,35,0,0,1-8.89-3.53l2,1.25a14.52,14.52,0,0,1-4.81-4.41l1.07,1.71a8.75,8.75,0,0,1-1.3-4.91l-.07,2a11.48,11.48,0,0,1,1.43-4.63l-1.16,2.11a36,36,0,0,1,6-7.69L36,18.78A42.41,42.41,0,0,1,42,13.93l-2.93,2a41.53,41.53,0,0,1,4.9-2.79l-3.62,1.72c.73-.34,1.47-.67,2.21-1,2.92-1.2,6.72-3.12,8.67-5.78,1.23-1.68,2-4.19.16-5.83C49.14.31,45.66-.06,42.9,0A35.31,35.31,0,0,0,30.43,2.59Z"></path></svg>
      </div>
      <svg data-trigger id="レイヤー_1" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 341.38 204.03" class="online-lesson__step6_end -pc"><path class="cls-1 svg-online-lesson-step6-1" d="M295.86,18.07a29,29,0,0,1,2,10.69V25.68a36.43,36.43,0,0,1-3.62,15.09l1.5-3.16a46.57,46.57,0,0,1-7.35,10.93l2.82-3.09a48.22,48.22,0,0,1-7.08,6.39L288.12,49a58.77,58.77,0,0,1-7.64,4.62l4.9-2.48a74.79,74.79,0,0,1-9.3,3.88l5.67-1.93a111.54,111.54,0,0,1-13.94,3.64l5.88-1.16c-9.48,1.85-19.11,2.87-28.69,4L213.12,63.5c-21,2.58-42.11,5-63.12,7.78-6.54.87-13,2-19.47,3.4a134.45,134.45,0,0,0-19,5.67,67.33,67.33,0,0,0-6.66,2.85A101,101,0,0,0,94.7,88.65a68.77,68.77,0,0,0-13,10.4c-3.68,3.93-7.19,7.89-9.65,12.71-2.3,4.51-4.32,9.1-5,14.16-.59,4.78-.13,1.92-6.13,14.92-2.07,4.48-21.31,31.77-25,35-32,28-36,26-36,26,1.92,1.16,27,.66,26,0,6.45,4.46,157.54,1.58,154-4-3.25-5.12-25-14-49-39,1,.66-13.36-17.26-17.61-24.49l1.54,2.66a32.56,32.56,0,0,1-4.56-16v3.07a32.44,32.44,0,0,1,3.26-13.84l-1.5,3.17a42.43,42.43,0,0,1,6.73-9.9L116,106.61a50.09,50.09,0,0,1,7.36-6.59l-4,2.87a52.76,52.76,0,0,1,7-4.28l-4.9,2.48a72.93,72.93,0,0,1,8.9-3.71l-5.67,1.93A105.87,105.87,0,0,1,137.61,96l-5.88,1.17c7.37-1.45,14.83-2.32,22.28-3.23l24.71-3,49.42-6.07c16.73-2,33.58-3.67,50-7.52a154.26,154.26,0,0,0,15.43-4.73,109.41,109.41,0,0,0,14.18-6.42,81.69,81.69,0,0,0,12.08-7.94,67,67,0,0,0,9.27-9.1,47.34,47.34,0,0,0,5.94-8.39,54.89,54.89,0,0,0,5.14-12.16,42.56,42.56,0,0,0,1.13-12.48,28.48,28.48,0,0,0-2-9.64,5.55,5.55,0,0,0-3-3.65A10.19,10.19,0,0,0,330.92.51a23.91,23.91,0,0,0-7.59-.36,31.6,31.6,0,0,0-8.62,1.32C309.62,3,304.05,5,300.19,8.74l-2.82,3.09a7.56,7.56,0,0,0-1.51,6.24Z"></path></svg>
      <picture class="online-lesson__welcome">
        <img data-trigger src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/welcome_text.svg" alt="welcome" class="online-lesson__welcomeText">
      </picture>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/flow_petal.png" alt="花弁イラスト" class="online-lesson__stepsPetal -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/flow_petal.png" alt="花弁イラスト" class="online-lesson__stepsPetal -sp">
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
        <p class="online-lesson__flowParagraph">月会費はクレジット決済を利用しています。最初に決済いただいた日が、毎月の決済日となります。</p>
      </div>
    </section>
    <section class="online-lesson__recruit" id="online-lesson-recruit">
      <h2 class="online-lesson__recruitHeading">
        <span class="sr-only">メンバー募集要綱</span>
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/recruit_header.svg"
            alt="メンバー募集要綱"
        >
      </h2>
      <h3 class="online-lesson__recruitSubHeading">2020年12月スタートメンバー</h3>
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
            <dd>前月25日〜末日</dd>
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
          <p>本規約には、株式会社ナマケモノ（以下「当社」といいます。）の提供するサービスのご利用にあたり、会員の皆様に遵守していただく事項が定められております。当該サービスを会員としてご利用になる方は、本規約に同意する前に、必ず全文お読みください。</p>
          <p>また、告知形態を問わず、当社が随時告知する本サービス等に関する内容、ルール、諸規定等は本規約の一部を構成するものとします。</p>


          <h4 class="online-lesson__termsSubHeading">第1条（定義）</h4>
          <p>本規約において使用する下記の用語は、各々下記に定める意味を有するものとします。</p>
          <ol class="online-lesson__termsList">
            <li class="online-lesson__termsItem">
              <p>
                (1)「脳トレ」<br>
                当社が提唱する、心のセルフメンテナンスメソッドのことをいいます。
              </p>
            </li>
            <li class="online-lesson__termsItem">
              <p>
                (2)本サービス<br>
              「脳トレ」オンラインレッスンのことをいいます。
            </p>
            </li>
            <li class="online-lesson__termsItem">
              <p>
                (3)会員<br>
              所定の条件を満たし、「脳トレ」オンラインレッスンもしくは当社の提供する他のオンラインレッスンの受講資格を得た者をいいます。
              </p>
            </li>
            <li class="online-lesson__termsItem">
              <p>
                (4)メンバーサイト<br>
              会員のみがログイン、閲覧、投稿その他の機能を利用できる当社所有のウェブサイトのことをいいます。
              </p>
            </li>
          </ol>

          <h4 class="online-lesson__termsSubHeading">第2条（入会・登録）</h4>
          <ol class="online-lesson__termsList">
            <li class="online-lesson__termsItem">
              1. 本サービスへの入会を希望する者は、下記全ての手続きを完了させた後、当社が定めるサービス開始日より会員となるものとします。
              <p>(1)本規約を遵守することへの同意</p>
            </li>
            <li class="online-lesson__termsItem">
              <p>(2)当社所定申し込みフォームへの登録情報の入力</p>
            </li>
            <li class="online-lesson__termsItem">
              <p>(3)第3条に定める費用の支払い第一回目の完了</p>
            </li>
            <li class="online-lesson__termsItem">
              <p>(4)メンバーサイトへの初回ログイン</p>
            </li>
            <li class="online-lesson__termsItem">
              2. 入会希望者が未成年の場合、本サービスの利用にあたり、事前に親権者その他の法定代理人から本サービスを利用することに関する許可を得る必要があります。なお当社は、未成年が本サービスの入会を希望した場合には、本項に定める許可を得ているものとみなします。
            </li>
            <li class="online-lesson__termsItem">
              3. 前各項の条件を満たした場合においても、本サービスの利用に支障がある、また、秩序を乱す恐れがあると認められた場合は本サービスの利用をお断りすることがあります。
            </li>
          </ol>

          <h4 class="online-lesson__termsSubHeading">第3条（費用）</h4>
          <ol class="online-lesson__termsList">
            <li class="online-lesson__termsItem">
              1.本サービスの入会希望者は、入会にあたり、以下の費用を支払うものとします。
              <p>入会金　金3万円</p>
              <p>「脳トレ」オンラインレッスン受講費用　金１８万円</p>
            </li>
            <li class="online-lesson__termsItem">
              2.費用の支払手段はクレジットカード又は外部決済サービスを通した銀行振込とします。
            </li>
            <li class="online-lesson__termsItem">
              3.費用の支払方法は、月額3万円の7回払いとし、外部決済サービスを通じて請求します。
            </li>
          </ol>

          <h4 class="online-lesson__termsSubHeading">第4条 パスワード及びユーザーIDの管理</h4>
          <ol class="online-lesson__termsList">
            <li class="online-lesson__termsItem">
              1. 会員は、自己の責任において、メンバーサイトのパスワード及びユーザーIDを管理及び保管するものとし、これを第三者に対して貸与、譲渡、名義変更又は売買等をしてはならないものとします。
            </li>
            <li class="online-lesson__termsItem">
              2. パスワード又はユーザーIDの管理不十分、使用上の過誤、第三者の使用等による損害の責任は会員が負うものとし、当社は一切の責任を負いません。
            </li>
          </ol>

          <h4 class="online-lesson__termsSubHeading">第5条（本サービス）</h4>
          <ol class="online-lesson__termsList">
            <li class="online-lesson__termsItem">
              1.本サービスには、下記の内容が含まれます。
              <p>(1)レッスン動画</p>
              <p>(2)グループセッション（上限：月2回まで）</p>
              <p>(3)メンバーサイト内のバックナンバー記事閲覧</p>
              <p>(4)メンバー限定セミナー</p>
              <p>(5)当社運営サロンの割引利用</p>
              <p>(6)当社主催イベントの先行案内</p>
            </li>
            <li class="online-lesson__termsItem">
              2.会員は、本サービスの受講終了後、下記各号のサービス（以下、本サービスと下記各号のサービスをまとめて「本サービス等」といいます。）の受講申請資格を得るものとします。
              <p>(1)「脳トレ」オンラインレッスンお代わりコース</p>
              <p>(2)「脳トレ」実践サロン</p>
              <p>(3)「脳トレ」カレッジ</p>
              <p>(4)「脳トレ」マスターコース（「脳トレ」カレッジ受講修了者のみ）</p>
              <p>(5)「脳トレ」セッション提供者コース（「脳トレ」カレッジ受講修了者のみ）</p>
            </li>
            <li class="online-lesson__termsItem">
              3. 告知形態を問わず、当社が随時告知する本サービス等に関する内容、費用その他の情報は、本規約の一部を構成するものとします。
            </li>
          </ol>

          <h4 class="online-lesson__termsSubHeading">第6条（デジタルコンテンツの不正利用）</h4>
          <ol class="online-lesson__termsList">
            <li class="online-lesson__termsItem">
              1.会員は、前条第１項に定める本サービス等の内容につき、そのコンテンツの形式を問わず、会員所有のPC、タブレット、スマートフォンその他一切のデジタルデバイスへのダウンロード、第三者への譲渡及び売買、SNS及びブログ等による拡散並びに無断アップロード等（以下「不正利用」といいます。）を行うことはできません。
            </li>
            <li class="online-lesson__termsItem">
              2.会員は、前条に定める本サービス等の内容の全部又は一部を利用して、会員自身又は会員の関係者による事業を行うことはできません。
            </li>
            <li class="online-lesson__termsItem">
              3.当社は、会員による不正利用又は前項に定める会員自身又は会員の関係者による事業への利用が発覚した場合には、直ちに当該会員の会員資格を剥奪し、損害賠償請求を行うことができるものとします。
            </li>
          </ol>

          <h4 class="online-lesson__termsSubHeading">第7条（通信環境）</h4>
          <p>本サービス等の提供を受けるために必要なコンピューター、ソフトウェアその他の機器、通信回線その他の通信環境の準備及び維持は、会員の費用と責任において行うものとし、通信環境の不備による本サービス等の利用機会の逸失又は利用不能に対して当社は一切責任を負わないものとします。</p>

          <h4 class="online-lesson__termsSubHeading">第8条（禁止行為）</h4>
          <ol class="online-lesson__termsList">
            <li class="online-lesson__termsItem">
              1. 会員は、本サービス等の利用にあたり、以下の各号のいずれかに該当する行為をしてはなりません。
              <p>(1)当社、他の会員その他の第三者の権利を侵害する行為</p>
              <p>(2)他の会員への営業活動、選挙運動、宗教又はネットワークビジネスへの勧誘などの行為</p>
              <p>(3)犯罪行為に関連する行為又は公序良俗に反する行為</p>
              <p>(4)コンピューター・ウィルスその他の有害なコンピューター・プログラムを含む情報を送信する行為</p>
              <p>(5)本サービス等や「脳トレ」に関する事業を当社の許諾なく実施する行為</p>
              <p>(6)その他、当社が不適切と判断する行為</p>
            </li>
            <li class="online-lesson__termsItem">
              2. 当社は、本サービス等における会員による情報の送信行為が前項各号のいずれかに該当し、又は該当するおそれがあると判断した場合には、会員に事前に通知することなく、当該情報の全部又は一部を削除することができるものとします。当社は、本項に基づき当社が行った措置に基づき会員に生じた損害について一切の責任を負いません。
            </li>
          </ol>

          <h4 class="online-lesson__termsSubHeading">第9条（本サービス等の停止等）</h4>
          <ol class="online-lesson__termsList">
            <li class="online-lesson__termsItem">
              1. 当社は、当社が停止又は中断を必要と判断した場合には、会員に事前に通知することなく、本サービス等の利用の全部又は一部を停止又は中断することができるものとします。
            </li>
            <li class="online-lesson__termsItem">
              2. 当社は、当社の都合により、本サービス等の提供を終了することができます。この場合、当社は会員に事前に通知するものとします。
            </li>
            <li class="online-lesson__termsItem">
              3. 当社は、本条に基づき当社が行った措置に基づき会員に生じた損害について一切の責任を負いません。
            </li>
          </ol>

          <h4 class="online-lesson__termsSubHeading">第10条（情報の保存）</h4>
          <p>当社は、本サービス等において会員が投稿その他送信を行った文章、画像、動画その他のデータ（以下「会員による投稿等」という。）を運営上一定期間保存していた場合であっても、これらの情報を保存する義務を負うものではなく、いつでもこれらの情報を削除できるものとします。なお、当社は本条に基づき当社が行った措置に基づき会員に生じた損害について一切の責任を負いません。</p>

          <h4 class="online-lesson__termsSubHeading">第11条（権利帰属）</h4>
          <ol class="online-lesson__termsList">
            <li class="online-lesson__termsItem">
              1.「脳トレ」は当社が保有する登録商標です。（登録番号第6085390号）会員が「脳トレ」という商標を用いて会員自身の事業を行いたい場合は、第５条第２項各号に定めるサービスの受講終了後、必ず事前に当社による許諾を得るものとします。
            </li>
            <li class="online-lesson__termsItem">
              2. 本サービス等に関する所有権及び知的財産権は全て当社に帰属します。
            </li>
            <li class="online-lesson__termsItem">
              3. 本サービス等における会員による投稿等は、当社において、無償で自由に利用（複製、複写、改変、第三者への再許諾、広報その他のあらゆる利用を含みます。）することができるものとします。
            </li>
          </ol>

          <h4 class="online-lesson__termsSubHeading">第12条（登録取消）</h4>
          <ol class="online-lesson__termsList">
            <li class="online-lesson__termsItem">1. 当社は、会員が本規約のいずれかの条項に違反した場合は、事前に通知又は催告することなく、当該会員について本サービス等の利用を一時的に停止し、又は会員としての登録を取り消すことができます。</li>
            <li class="online-lesson__termsItem">2. 当社は、本条に基づき当社が行った行為により会員に生じた損害について一切の責任を負いません。</li>
          </ol>

          <h4 class="online-lesson__termsSubHeading">第13条（中途解約・返金）</h4>
          <ol class="online-lesson__termsList">
            <li class="online-lesson__termsItem">
              1.会員は、第2条第1項の規定により会員資格を得た以降は、理由の如何を問わず、本サービスを中途解約することはできないものとします。また、特段の定めがない限りは、第５条第２項各号に定めるサービスについても同様とします。
            </li>
            <li class="online-lesson__termsItem">
              2.当社は、会員の本サービス等の利用状況にかかわらず、会員が会員資格を得た以降は、一切の返金申請に応じないものとします。
            </li>
            <li class="online-lesson__termsItem">
              3. 前2項の規定にかかわらず、下記の各号に該当する場合は、当社と会員は中途解約及び返金について協議することができるものとします。なお、下記1号に該当する場合における中途解約及び返金については、その条件を当社が一律で決めることができるものとし、会員はこれを承諾するものとします。
              <p>(1)地震、火災、洪水若しくは津波等の天災、感染症の流行その他の不可抗力又は当社の責めに帰すべき事由により、当社による本サービス等の提供又は会員の本サービス等享受が不能となった場合</p>
              <p>(2)社会経済状況に大きな変化が生じ、又は生じるおそれがあると当社が認める場合</p>
              <p>(3)会員自身に、長期の入院その他の療養の必要性が生じた場合</p>
              <p>(4)その他、当社が適当と認める場合</p>
            </li>
          </ol>

          <h4 class="online-lesson__termsSubHeading">第14条（保証の否認及び免責）</h4>
          <ol class="online-lesson__termsList">
            <li class="online-lesson__termsItem">1.会員は、本サービス等は「脳トレ」の概念を伝えるものであり、会員に対して何らの変化を確約するものではないことを了承するものとします。</li>
            <li class="online-lesson__termsItem">2. 本サービス等又はメンバーサイトにおいて会員と他の会員、その他の第三者との間において生じた紛争等については、会員の責任において処理及び解決するものとし、当社はかかる事項について一切責任を負いません。</li>
            <li class="online-lesson__termsItem">3. 当社は、当社による本サービス等の提供の中断、停止、終了、利用不能又は変更、会員のメッセージ又は情報の削除又は消失､会員の登録の取消、本サービス等の利用によるデータの消失又は機器の故障若しくは損傷、その他本サービス等に関連して会員が被った損害につき、賠償する責任を一切負わないものとします。</li>
          </ol>

          <h4 class="online-lesson__termsSubHeading">第15条（紛争処理及び損害賠償）</h4>
          <ol class="online-lesson__termsList">
            <li class="online-lesson__termsItem">1. 会員は、本規約に違反することにより、又は本サービス等の利用に関連して当社に損害を与えた場合、当社に対しその損害を賠償しなければなりません。</li>
            <li class="online-lesson__termsItem">2. 会員による本サービス等の利用に関連して、当社が、他の会員その他の第三者から権利侵害その他の理由により何らかの請求を受けた場合は、会員は当該請求に基づき当社が当該第三者に支払を余儀なくされた金額を賠償しなければなりません。</li>
            <li class="online-lesson__termsItem">3. 当社は、本サービス等に関連して会員が被った損害について、一切賠償の責任を負いません。</li>
            <li class="online-lesson__termsItem">4. 当社が責任を負う場合であっても、当社は、当社の過失（重過失を除きます。）による契約責任又は不法行為責任については、予見及び予見可能性の有無にかかわらず、間接損害、特別損害、会員の事業機会の損失、逸失利益その他の特別の事情によって生じた損害を賠償する責任を負わず、直接かつ通常生じうる損害の範囲内で損害賠償責任を負うものとします。</li>
          </ol>

          <h4 class="online-lesson__termsSubHeading">第16条（個人情報の取扱い）</h4>
          <p>当社は、別途定めるプライバシーポリシーに従って会員の個人情報を取り扱うものとし、会員はこれに同意するものとします。</p>

          <h4 class="online-lesson__termsSubHeading">第17条（有効期間）</h4>
          <p>会員の身分が有効である期間は、第2条第1項の規定により会員資格を得た日から、本サービスの提供が終了した日までとします。ただし、会員が、第５条第２項各号に定めるサービスの会員資格を得た場合の有効期間は、当該サービスの会員資格を得た日から当該サービスの提供終了日までとし、以降も同様とします。</p>

          <h4 class="online-lesson__termsSubHeading">第18条（本規約等の変更）</h4>
          <ol class="online-lesson__termsList">
            <li class="online-lesson__termsItem">1. 当社は、本サービス等の内容を自由に変更できるものとします。</li>
            <li class="online-lesson__termsItem">2. 当社は、本規約（メンバーサイトその他の当社が所有するウェブサイトに掲載する本サービス等に関するルール及び規定等を含みます。以下本項において同じ。）を変更できるものとします。当社は、本規約を変更した場合には、メンバーサイトに掲載することにより会員に当該変更内容を通知するものとし、当該変更内容の通知後、会員が本サービス等を利用した場合は、会員は本規約の変更に同意したものとみなします。</li>
          </ol>

          <h4 class="online-lesson__termsSubHeading">第19条（連絡／通知）</h4>
          <p>本サービス等に関する問い合わせその他会員から当社に対する連絡又は通知、及び本規約の変更に関する通知その他当社から会員に対する連絡又は通知は、当社の定める方法で行うものとします。</p>

          <h4 class="online-lesson__termsSubHeading">第20条（本規約の譲渡等）</h4>
          <ol class="online-lesson__termsList">
            <li class="online-lesson__termsItem">1. 会員は、当社の書面による事前の承諾なく、本規約に基づく権利若しくは義務につき、第三者に対し、譲渡、移転、担保設定、その他の処分をすることはできません。</li>
            <li class="online-lesson__termsItem">2. 当社は本サービス等にかかる事業を他社に譲渡した場合には、当該事業譲渡に伴い利用契約上の地位、本規約に基づく権利及び義務並びに会員の登録情報その他の顧客情報を当該事業譲渡の譲受人に譲渡することができるものとし、会員は、かかる譲渡につき本項において予め同意したものとします。なお、本項に定める事業譲渡には、通常の事業譲渡のみならず、会社分割その他事業が移転するあらゆる場合を含むものとします。</li>
          </ol>

          <h4 class="online-lesson__termsSubHeading">第21条（完全合意）</h4>
          <p>本規約は、本規約に含まれる事項に関する当社と会員との完全な合意を構成し、口頭又は書面を問わず、本規約に含まれる事項に関する当社と会員との事前の合意、表明及び了解に優先します。</p>

          <h4 class="online-lesson__termsSubHeading">第22条（分離可能性）</h4>
          <p>本規約のいずれかの条項又はその一部が、消費者契約法その他の法令等により無効又は執行不能と判断された場合であっても、本規約の残りの規定及び一部が無効又は執行不能と判断された規定の残りの部分は、継続して完全に効力を有し、当社及び会員は、当該無効若しくは執行不能の条項又は部分を適法とし、執行力を持たせるために必要な範囲で修正し、当該無効若しくは執行不能な条項又は部分の趣旨並びに法律的及び経済的に同等の効果を確保できるように努めるものとします。</p>

          <h4 class="online-lesson__termsSubHeading">第23条（存続規定）</h4>
          <p>本規約の各条項のうち、その趣旨からして契約終了後も存続することを要する規定については第17条に定める有効期間終了後も有効に存続するものとします。</p>

          <h4 class="online-lesson__termsSubHeading">第24条（準拠法及び管轄裁判所）</h4>
          <p>本規約の準拠法は日本法とし、本規約に起因し又は関連する一切の紛争については、東京地方裁判所を第一審の専属的合意管轄裁判所とします。</p>

          【2020年9月15日制定】

      </div>
      <div id="online-lesson__termsAgreeWrapper">
        <div class="online-lesson__termsAgree">
          <input type="checkbox" id="agree" value="同意する" :checked="isChecked" @change="toggleChecked" class="online-lesson__termsCheckbox">
          <label for="agree">利用規約に同意する</label>
        </div>
        <span v-if="hasError" class="online-lesson__termsError">※利用規約に同意が行われていません</span>
        <div class="buttonWrapper">
          <!-- <a href="https://39auto.biz/namakemono-yuki/touroku/entryform15.htm" class="button" @click="consentCheck"> -->
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
