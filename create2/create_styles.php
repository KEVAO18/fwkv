<?php 

/**
 * create styles
 */
class create_styles{

	/*
	* crea las carpetas
	* - main styles
	* - height and width styles
	* - colors
	* - paddings
	* - margings
	*/

	function __construct(){
		
	}

	public function main_styles($fl){


		$st1 = fopen($fl.'/assets/styles/st1.css', 'a');
		fwrite($st1, "
			/****************************/
			/*        main styles       */
			/****************************/


			.view {
			  background: url('https://cdn.pixabay.com/photo/2020/07/22/08/39/waterfall-5428467_960_720.jpg')no-repeat center center;
			  background-size: cover;
			  background-attachment: fixed;
			}

			@media (min-width: 601px) {
			  .view {
			    overflow: visible;
			    margin-top: -56px;
			  }
			}

			html,body,header,.view {
			  height: 100vh;
			}

			@media (max-width: 600px) {  
			  html,body,header,.view {
			    height: 80vh;
			  }
			}
			.ti-text{
			  font-family: 'Open Sans', sans-serif;
			  font-size: 3rem;
			}

			.btn-text{
			  font-family: 'Open Sans', sans-serif;
			  font-size: 2rem;
			}

			.p-text{
			  font-family: 'Open Sans', sans-serif;
			  font-size: 1.5rem;
			}
		");		
	}


	public function colors($fl){


		$colors = fopen($fl.'/assets/styles/colores.css', 'a');
		fwrite($colors, "
			:root {
			  --main-color: #eb4d4b;
			  --color-1: #eb4d4b87;
			  --color-2: #fefefe;
			  --color-3: #222222;
			  --color-4: #000000;
			  --color-5: #fefefe25;
			  --color-6: #3d3d3d;
			}



			/****************************/
			/*          fondos          */
			/****************************/


			.bg-main{background: var(--main-color);}

			.bg-1{background: var(--color-1);}

			.bg-2{background: var(--color-2);}

			.bg-3{background: var(--color-3);}

			.bg-4{background: var(--color-4);}

			.bg-5{background: var(--color-5);}

			.bg-6{background: var(--color-6);}



			/****************************/
			/*          color           */
			/****************************/


			.top-bar>i{color: var(--color-2);}

			.color-main{color: var(--main-color);}

			.color-1{color: var(--color-1);}

			.color-2{color: var(--color-2);}

			.color-3{color: var(--color-3);}

			.color-4{color: var(--color-4);}

			.color-5{color: var(--color-5);}

			.color-6{color: var(--color-6);}
		");
	}


	public function padding($fl){


		$pad = fopen($fl.'/assets/styles/padding.css', 'a');
		fwrite($pad, "
			/****************************/
			/*       padding top        */
			/*      tipo : pixeles      */
			/****************************/


			.pt-10-px{
			  padding-top: 10px;
			}

			.pt-20-px{
			  padding-top: 20px;
			}

			.pt-30-px{
			  padding-top: 30px;
			}

			.pt-40-px{
			  padding-top: 40px;
			}

			.pt-50-px{
			  padding-top: 50px;
			}

			.pt-60-px{
			  padding-top: 60px;
			}

			.pt-70-px{
			  padding-top: 70px;
			}

			.pt-80-px{
			  padding-top: 80px;
			}



			/****************************/
			/*        padding top       */
			/*     tipo : porcentage    */
			/****************************/


			.pt-10-p{
			  padding-top: 10%;
			}

			.pt-9-p{
			  padding-top: 9%;
			}

			.pt-8-p{
			  padding-top: 8%;
			}

			.pt-7-p{
			  padding-top: 7%;
			}

			.pt-6-p{
			  padding-top: 6%;
			}

			.pt-5-p{
			  padding-top: 5%;
			}

			.pt-4-p{
			  padding-top: 4%;
			}

			.pt-3-p{
			  padding-top: 3%;
			}

			.pt-2-p{
			  padding-top: 2%;
			}

			.pt-1-p{
			  padding-top: 1%;
			}



			/****************************/
			/*        padding top       */
			/*         tipo : rem       */
			/****************************/


			.pt-10-r{
			  padding-top: 10rem;
			}

			.pt-9-r{
			  padding-top: 9rem;
			}

			.pt-8-r{
			  padding-top: 8rem;
			}

			.pt-7-r{
			  padding-top: 7rem;
			}

			.pt-6-r{
			  padding-top: 6rem;
			}

			.pt-5-r{
			  padding-top: 5rem;
			}

			.pt-4-r{
			  padding-top: 4rem;
			}

			.pt-3-r{
			  padding-top: 3rem;
			}

			.pt-2-r{
			  padding-top: 2rem;
			}

			.pt-1-r{
			  padding-top: 1rem;
			}


			/****************************/
			/*     padding bottom       */
			/*      tipo : pixeles      */
			/****************************/


			.pb-10-px{
			  padding-bottom: 10px;
			}

			.pb-20-px{
			  padding-bottom: 20px;
			}

			.pb-30-px{
			  padding-bottom: 30px;
			}

			.pb-40-px{
			  padding-bottom: 40px;
			}

			.pb-50-px{
			  padding-bottom: 50px;
			}

			.pb-60-px{
			  padding-bottom: 60px;
			}

			.pb-70-px{
			  padding-bottom: 70px;
			}

			.pb-80-px{
			  padding-bottom: 80px;
			}



			/****************************/
			/*      padding bottom      */
			/*     tipo : porcentage    */
			/****************************/


			.pb-10-p{
			  padding-bottom: 10%;
			}

			.pb-9-p{
			  padding-bottom: 9%;
			}

			.pb-8-p{
			  padding-bottom: 8%;
			}

			.pb-7-p{
			  padding-bottom: 7%;
			}

			.pb-6-p{
			  padding-bottom: 6%;
			}

			.pb-5-p{
			  padding-bottom: 5%;
			}

			.pb-4-p{
			  padding-bottom: 4%;
			}

			.pb-3-p{
			  padding-bottom: 3%;
			}

			.pb-2-p{
			  padding-bottom: 2%;
			}

			.pb-1-p{
			  padding-bottom: 1%;
			}



			/****************************/
			/*      padding bottom      */
			/*        tipo : rem        */
			/****************************/


			.pb-10-r{
			  padding-bottom: 10rem;
			}

			.pb-9-r{
			  padding-bottom: 9rem;
			}

			.pb-8-r{
			  padding-bottom: 8rem;
			}

			.pb-7-r{
			  padding-bottom: 7rem;
			}

			.pb-6-r{
			  padding-bottom: 6rem;
			}

			.pb-5-r{
			  padding-bottom: 5rem;
			}

			.pb-4-r{
			  padding-bottom: 4rem;
			}

			.pb-3-r{
			  padding-bottom: 3rem;
			}

			.pb-2-r{
			  padding-bottom: 2rem;
			}

			.pb-1-r{
			  padding-bottom: 1rem;
			}



			/****************************/
			/*      padding left        */
			/*      tipo : pixeles      */
			/****************************/


			.pl-10-px{
			  padding-left: 10px;
			}

			.pl-20-px{
			  padding-left: 20px;
			}

			.pl-30-px{
			  padding-left: 30px;
			}

			.pl-40-px{
			  padding-left: 40px;
			}

			.pl-50-px{
			  padding-left: 50px;
			}

			.pl-60-px{
			  padding-left: 60px;
			}

			.pl-70-px{
			  padding-left: 70px;
			}

			.pl-80-px{
			  padding-left: 80px;
			}



			/****************************/
			/*       padding left       */
			/*     tipo : porcentage    */
			/****************************/


			.pl-10-p{
			  padding-left: 10%;
			}

			.pl-9-p{
			  padding-left: 9%;
			}

			.pl-8-p{
			  padding-left: 8%;
			}

			.pl-7-p{
			  padding-left: 7%;
			}

			.pl-6-p{
			  padding-left: 6%;
			}

			.pl-5-p{
			  padding-left: 5%;
			}

			.pl-4-p{
			  padding-left: 4%;
			}

			.pl-3-p{
			  padding-left: 3%;
			}

			.pl-2-p{
			  padding-left: 2%;
			}

			.pl-1-p{
			  padding-left: 1%;
			}



			/****************************/
			/*       padding left       */
			/*        tipo : rem        */
			/****************************/


			.pl-10-r{
			  padding-left: 10rem;
			}

			.pl-9-r{
			  padding-left: 9rem;
			}

			.pl-8-r{
			  padding-left: 8rem;
			}

			.pl-7-r{
			  padding-left: 7rem;
			}

			.pl-6-r{
			  padding-left: 6rem;
			}

			.pl-5-r{
			  padding-left: 5rem;
			}

			.pl-4-r{
			  padding-left: 4rem;
			}

			.pl-3-r{
			  padding-left: 3rem;
			}

			.pl-2-r{
			  padding-left: 2rem;
			}

			.pl-1-r{
			  padding-left: 1rem;
			}



			/****************************/
			/*      padding right       */
			/*      tipo : pixeles      */
			/****************************/


			.pr-10-px{
			  padding-right: 10px;
			}

			.pr-20-px{
			  padding-right: 20px;
			}

			.pr-30-px{
			  padding-right: 30px;
			}

			.pr-40-px{
			  padding-right: 40px;
			}

			.pr-50-px{
			  padding-right: 50px;
			}

			.pr-60-px{
			  padding-right: 60px;
			}

			.pr-70-px{
			  padding-right: 70px;
			}

			.pr-80-px{
			  padding-right: 80px;
			}



			/****************************/
			/*       padding right      */
			/*     tipo : porcentage    */
			/****************************/


			.pr-10-p{
			  padding-right: 10%;
			}

			.pr-9-p{
			  padding-right: 9%;
			}

			.pr-8-p{
			  padding-right: 8%;
			}

			.pr-7-p{
			  padding-right: 7%;
			}

			.pr-6-p{
			  padding-right: 6%;
			}

			.pr-5-p{
			  padding-right: 5%;
			}

			.pr-4-p{
			  padding-right: 4%;
			}

			.pr-3-p{
			  padding-right: 3%;
			}

			.pr-2-p{
			  padding-right: 2%;
			}

			.pr-1-p{
			  padding-right: 1%;
			}



			/****************************/
			/*       padding right      */
			/*        tipo : rem        */
			/****************************/


			.pr-10-r{
			  padding-right: 10rem;
			}

			.pr-9-r{
			  padding-right: 9rem;
			}

			.pr-8-r{
			  padding-right: 8rem;
			}

			.pr-7-r{
			  padding-right: 7rem;
			}

			.pr-6-r{
			  padding-right: 6rem;
			}

			.pr-5-r{
			  padding-right: 5rem;
			}

			.pr-4-r{
			  padding-right: 4rem;
			}

			.pr-3-r{
			  padding-right: 3rem;
			}

			.pr-2-r{
			  padding-right: 2rem;
			}

			.pr-1-r{
			  padding-right: 1rem;
			}


			/****************************/
			/*        padding y         */
			/*      tipo : pixeles      */
			/****************************/


			.py-10-px{
			  padding-top: 10px;
			  padding-bottom: 10px; 
			}

			.py-20-px{
			  padding-top: 20px;
			  padding-bottom: 20px; 
			}

			.py-30-px{
			  padding-top: 30px;
			  padding-bottom: 30px; 
			}

			.py-40-px{
			  padding-top: 40px;
			  padding-bottom: 40px; 
			}

			.py-50-px{
			  padding-top: 50px;
			  padding-bottom: 50px; 
			}

			.py-60-px{
			  padding-top: 60px;
			  padding-bottom: 60px; 
			}

			.py-70-px{
			  padding-top: 70px;
			  padding-bottom: 70px; 
			}

			.py-80-px{
			  padding-top: 80px;
			  padding-bottom: 80px; 
			}



			/****************************/
			/*         padding y        */
			/*     tipo : porcentage    */
			/****************************/


			.py-10-p{
			  padding-top: 10%;
			  padding-bottom: 10%; 
			}

			.py-9-p{
			  padding-top: 9%;
			  padding-bottom: 9%; 
			}

			.py-8-p{
			  padding-top: 8%;
			  padding-bottom: 8%; 
			}

			.py-7-p{
			  padding-top: 7%;
			  padding-bottom: 7%; 
			}

			.py-6-p{
			  padding-top: 6%;
			  padding-bottom: 6%; 
			}

			.py-5-p{
			  padding-top: 5%;
			  padding-bottom: 5%; 
			}

			.py-4-p{
			  padding-top: 4%;
			  padding-bottom: 4%; 
			}

			.py-3-p{
			  padding-top: 3%;
			  padding-bottom: 3%; 
			}

			.py-2-p{
			  padding-top: 2%;
			  padding-bottom: 2%; 
			}

			.py-1-p{
			  padding-top: 1%;
			  padding-bottom: 1%; 
			}



			/****************************/
			/*         padding y        */
			/*        tipo : rem        */
			/****************************/


			.py-10-r{
			  padding-top: 10rem;
			  padding-bottom: 10rem; 
			}

			.py-9-r{
			  padding-top: 9rem;
			  padding-bottom: 9rem; 
			}

			.py-8-r{
			  padding-top: 8rem;
			  padding-bottom: 8rem; 
			}

			.py-7-r{
			  padding-top: 7rem;
			  padding-bottom: 7rem; 
			}

			.py-6-r{
			  padding-top: 6rem;
			  padding-bottom: 6rem; 
			}

			.py-5-r{
			  padding-top: 5rem;
			  padding-bottom: 5rem; 
			}

			.py-4-r{
			  padding-top: 4rem;
			  padding-bottom: 4rem; 
			}

			.py-3-r{
			  padding-top: 3rem;
			  padding-bottom: 3rem; 
			}

			.py-2-r{
			  padding-top: 2rem;
			  padding-bottom: 2rem; 
			}

			.py-1-r{
			  padding-top: 1rem;
			  padding-bottom: 1rem; 
			}


			/****************************/
			/*        padding x         */
			/*      tipo : pixeles      */
			/****************************/


			.px-10-px{
			  padding-left: 10px;
			  padding-right: 10px; 
			}

			.px-20-px{
			  padding-left: 20px;
			  padding-right: 20px; 
			}

			.px-30-px{
			  padding-left: 30px;
			  padding-right: 30px; 
			}

			.px-40-px{
			  padding-left: 40px;
			  padding-right: 40px; 
			}

			.px-50-px{
			  padding-left: 50px;
			  padding-right: 50px; 
			}

			.px-60-px{
			  padding-left: 60px;
			  padding-right: 60px; 
			}

			.px-70-px{
			  padding-left: 70px;
			  padding-right: 70px; 
			}

			.px-80-px{
			  padding-left: 80px;
			  padding-right: 80px; 
			}



			/****************************/
			/*         padding x        */
			/*     tipo : porcentage    */
			/****************************/


			.px-10-p{
			  padding-left: 10%;
			  padding-right: 10%; 
			}

			.px-9-p{
			  padding-left: 9%;
			  padding-right: 9%; 
			}

			.px-8-p{
			  padding-left: 8%;
			  padding-right: 8%; 
			}

			.px-7-p{
			  padding-left: 7%;
			  padding-right: 7%; 
			}

			.px-6-p{
			  padding-left: 6%;
			  padding-right: 6%; 
			}

			.px-5-p{
			  padding-left: 5%;
			  padding-right: 5%; 
			}

			.px-4-p{
			  padding-left: 4%;
			  padding-right: 4%; 
			}

			.px-3-p{
			  padding-left: 3%;
			  padding-right: 3%; 
			}

			.px-2-p{
			  padding-left: 2%;
			  padding-right: 2%; 
			}

			.px-1-p{
			  padding-left: 1%;
			  padding-right: 1%; 
			}



			/****************************/
			/*         padding x        */
			/*        tipo : rem        */
			/****************************/


			.px-10-r{
			  padding-left: 10rem;
			  padding-right: 10rem; 
			}

			.px-9-r{
			  padding-left: 9rem;
			  padding-right: 9rem; 
			}

			.px-8-r{
			  padding-left: 8rem;
			  padding-right: 8rem; 
			}

			.px-7-r{
			  padding-left: 7rem;
			  padding-right: 7rem; 
			}

			.px-6-r{
			  padding-left: 6rem;
			  padding-right: 6rem; 
			}

			.px-5-r{
			  padding-left: 5rem;
			  padding-right: 5rem; 
			}

			.px-4-r{
			  padding-left: 4rem;
			  padding-right: 4rem; 
			}

			.px-3-r{
			  padding-left: 3rem;
			  padding-right: 3rem; 
			}

			.px-2-r{
			  padding-left: 2rem;
			  padding-right: 2rem; 
			}

			.px-1-r{
			  padding-left: 1rem;
			  padding-right: 1rem; 
			}
		");
	}


	public function margin($fl){


		$margin = fopen($fl.'/assets/styles/margin.css', 'a');
		fwrite($margin, "
			/****************************/
			/*        margin top        */
			/*      tipo : pixeles      */
			/****************************/


			.mt-10-px{
			  margin-top: 10px;
			}

			.mt-20-px{
			  margin-top: 20px;
			}

			.mt-30-px{
			  margin-top: 30px;
			}

			.mt-40-px{
			  margin-top: 40px;
			}

			.mt-50-px{
			  margin-top: 50px;
			}

			.mt-60-px{
			  margin-top: 60px;
			}

			.mt-70-px{
			  margin-top: 70px;
			}

			.mt-80-px{
			  margin-top: 80px;
			}



			/****************************/
			/*        margin top        */
			/*     tipo : porcentage    */
			/****************************/


			.mt-10-p{
			  margin-top: 10%;
			}

			.mt-9-p{
			  margin-top: 9%;
			}

			.mt-8-p{
			  margin-top: 8%;
			}

			.mt-7-p{
			  margin-top: 7%;
			}

			.mt-6-p{
			  margin-top: 6%;
			}

			.mt-5-p{
			  margin-top: 5%;
			}

			.mt-4-p{
			  margin-top: 4%;
			}

			.mt-3-p{
			  margin-top: 3%;
			}

			.mt-2-p{
			  margin-top: 2%;
			}

			.mt-1-p{
			  margin-top: 1%;
			}



			/****************************/
			/*        margin top        */
			/*        tipo : rem        */
			/****************************/


			.mt-10-r{
			  margin-top: 10rem;
			}

			.mt-9-r{
			  margin-top: 9rem;
			}

			.mt-8-r{
			  margin-top: 8rem;
			}

			.mt-7-r{
			  margin-top: 7rem;
			}

			.mt-6-r{
			  margin-top: 6rem;
			}

			.mt-5-r{
			  margin-top: 5rem;
			}

			.mt-4-r{
			  margin-top: 4rem;
			}

			.mt-3-r{
			  margin-top: 3rem;
			}

			.mt-2-r{
			  margin-top: 2rem;
			}

			.mt-1-r{
			  margin-top: 1rem;
			}


			/****************************/
			/*      margin bottom       */
			/*      tipo : pixeles      */
			/****************************/


			.mb-10-px{
			  margin-bottom: 10px;
			}

			.mb-20-px{
			  margin-bottom: 20px;
			}

			.mb-30-px{
			  margin-bottom: 30px;
			}

			.mb-40-px{
			  margin-bottom: 40px;
			}

			.mb-50-px{
			  margin-bottom: 50px;
			}

			.mb-60-px{
			  margin-bottom: 60px;
			}

			.mb-70-px{
			  margin-bottom: 70px;
			}

			.mb-80-px{
			  margin-bottom: 80px;
			}



			/****************************/
			/*       margin bottom      */
			/*     tipo : porcentage    */
			/****************************/


			.mb-10-p{
			  margin-bottom: 10%;
			}

			.mb-9-p{
			  margin-bottom: 9%;
			}

			.mb-8-p{
			  margin-bottom: 8%;
			}

			.mb-7-p{
			  margin-bottom: 7%;
			}

			.mb-6-p{
			  margin-bottom: 6%;
			}

			.mb-5-p{
			  margin-bottom: 5%;
			}

			.mb-4-p{
			  margin-bottom: 4%;
			}

			.mb-3-p{
			  margin-bottom: 3%;
			}

			.mb-2-p{
			  margin-bottom: 2%;
			}

			.mb-1-p{
			  margin-bottom: 1%;
			}



			/****************************/
			/*       margin bottom      */
			/*        tipo : rem        */
			/****************************/


			.mb-10-r{
			  margin-bottom: 10rem;
			}

			.mb-9-r{
			  margin-bottom: 9rem;
			}

			.mb-8-r{
			  margin-bottom: 8rem;
			}

			.mb-7-r{
			  margin-bottom: 7rem;
			}

			.mb-6-r{
			  margin-bottom: 6rem;
			}

			.mb-5-r{
			  margin-bottom: 5rem;
			}

			.mb-4-r{
			  margin-bottom: 4rem;
			}

			.mb-3-r{
			  margin-bottom: 3rem;
			}

			.mb-2-r{
			  margin-bottom: 2rem;
			}

			.mb-1-r{
			  margin-bottom: 1rem;
			}



			/****************************/
			/*        margin left       */
			/*      tipo : pixeles      */
			/****************************/


			.ml-10-px{
			  margin-left: 10px;
			}

			.ml-20-px{
			  margin-left: 20px;
			}

			.ml-30-px{
			  margin-left: 30px;
			}

			.ml-40-px{
			  margin-left: 40px;
			}

			.ml-50-px{
			  margin-left: 50px;
			}

			.ml-60-px{
			  margin-left: 60px;
			}

			.ml-70-px{
			  margin-left: 70px;
			}

			.ml-80-px{
			  margin-left: 80px;
			}



			/****************************/
			/*       margin left        */
			/*     tipo : porcentage    */
			/****************************/


			.ml-10-p{
			  margin-left: 10%;
			}

			.ml-9-p{
			  margin-left: 9%;
			}

			.ml-8-p{
			  margin-left: 8%;
			}

			.ml-7-p{
			  margin-left: 7%;
			}

			.ml-6-p{
			  margin-left: 6%;
			}

			.ml-5-p{
			  margin-left: 5%;
			}

			.ml-4-p{
			  margin-left: 4%;
			}

			.ml-3-p{
			  margin-left: 3%;
			}

			.ml-2-p{
			  margin-left: 2%;
			}

			.ml-1-p{
			  margin-left: 1%;
			}



			/****************************/
			/*       margin left        */
			/*        tipo : rem        */
			/****************************/


			.ml-10-r{
			  margin-left: 10rem;
			}

			.ml-9-r{
			  margin-left: 9rem;
			}

			.ml-8-r{
			  margin-left: 8rem;
			}

			.ml-7-r{
			  margin-left: 7rem;
			}

			.ml-6-r{
			  margin-left: 6rem;
			}

			.ml-5-r{
			  margin-left: 5rem;
			}

			.ml-4-r{
			  margin-left: 4rem;
			}

			.ml-3-r{
			  margin-left: 3rem;
			}

			.ml-2-r{
			  margin-left: 2rem;
			}

			.ml-1-r{
			  margin-left: 1rem;
			}



			/****************************/
			/*      margin right        */
			/*      tipo : pixeles      */
			/****************************/


			.mr-10-px{
			  margin-right: 10px;
			}

			.mr-20-px{
			  margin-right: 20px;
			}

			.mr-30-px{
			  margin-right: 30px;
			}

			.mr-40-px{
			  margin-right: 40px;
			}

			.mr-50-px{
			  margin-right: 50px;
			}

			.mr-60-px{
			  margin-right: 60px;
			}

			.mr-70-px{
			  margin-right: 70px;
			}

			.mr-80-px{
			  margin-right: 80px;
			}



			/****************************/
			/*       margin right       */
			/*     tipo : porcentage    */
			/****************************/


			.mr-10-p{
			  margin-right: 10%;
			}

			.mr-9-p{
			  margin-right: 9%;
			}

			.mr-8-p{
			  margin-right: 8%;
			}

			.mr-7-p{
			  margin-right: 7%;
			}

			.mr-6-p{
			  margin-right: 6%;
			}

			.mr-5-p{
			  margin-right: 5%;
			}

			.mr-4-p{
			  margin-right: 4%;
			}

			.mr-3-p{
			  margin-right: 3%;
			}

			.mr-2-p{
			  margin-right: 2%;
			}

			.mr-1-p{
			  margin-right: 1%;
			}



			/****************************/
			/*       margin right       */
			/*        tipo : rem        */
			/****************************/


			.mr-10-r{
			  margin-right: 10rem;
			}

			.mr-9-r{
			  margin-right: 9rem;
			}

			.mr-8-r{
			  margin-right: 8rem;
			}

			.mr-7-r{
			  margin-right: 7rem;
			}

			.mr-6-r{
			  margin-right: 6rem;
			}

			.mr-5-r{
			  margin-right: 5rem;
			}

			.mr-4-r{
			  margin-right: 4rem;
			}

			.mr-3-r{
			  margin-right: 3rem;
			}

			.mr-2-r{
			  margin-right: 2rem;
			}

			.mr-1-r{
			  margin-right: 1rem;
			}


			/****************************/
			/*        margin y          */
			/*      tipo : pixeles      */
			/****************************/


			.my-10-px{
			  margin-top: 10px;
			  margin-bottom: 10px; 
			}

			.my-20-px{
			  margin-top: 20px;
			  margin-bottom: 20px; 
			}

			.my-30-px{
			  margin-top: 30px;
			  margin-bottom: 30px; 
			}

			.my-40-px{
			  margin-top: 40px;
			  margin-bottom: 40px; 
			}

			.my-50-px{
			  margin-top: 50px;
			  margin-bottom: 50px; 
			}

			.my-60-px{
			  margin-top: 60px;
			  margin-bottom: 60px; 
			}

			.my-70-px{
			  margin-top: 70px;
			  margin-bottom: 70px; 
			}

			.my-80-px{
			  margin-top: 80px;
			  margin-bottom: 80px; 
			}



			/****************************/
			/*         margin y         */
			/*     tipo : porcentage    */
			/****************************/


			.my-10-p{
			  margin-top: 10%;
			  margin-bottom: 10%; 
			}

			.my-9-p{
			  margin-top: 9%;
			  margin-bottom: 9%; 
			}

			.my-8-p{
			  margin-top: 8%;
			  margin-bottom: 8%; 
			}

			.my-7-p{
			  margin-top: 7%;
			  margin-bottom: 7%; 
			}

			.my-6-p{
			  margin-top: 6%;
			  margin-bottom: 6%; 
			}

			.my-5-p{
			  margin-top: 5%;
			  margin-bottom: 5%; 
			}

			.my-4-p{
			  margin-top: 4%;
			  margin-bottom: 4%; 
			}

			.my-3-p{
			  margin-top: 3%;
			  margin-bottom: 3%; 
			}

			.my-2-p{
			  margin-top: 2%;
			  margin-bottom: 2%; 
			}

			.my-1-p{
			  margin-top: 1%;
			  margin-bottom: 1%; 
			}



			/****************************/
			/*         margin y         */
			/*        tipo : rem        */
			/****************************/


			.my-10-r{
			  margin-top: 10rem;
			  margin-bottom: 10rem; 
			}

			.my-9-r{
			  margin-top: 9rem;
			  margin-bottom: 9rem; 
			}

			.my-8-r{
			  margin-top: 8rem;
			  margin-bottom: 8rem; 
			}

			.my-7-r{
			  margin-top: 7rem;
			  margin-bottom: 7rem; 
			}

			.my-6-r{
			  margin-top: 6rem;
			  margin-bottom: 6rem; 
			}

			.my-5-r{
			  margin-top: 5rem;
			  margin-bottom: 5rem; 
			}

			.my-4-r{
			  margin-top: 4rem;
			  margin-bottom: 4rem; 
			}

			.my-3-r{
			  margin-top: 3rem;
			  margin-bottom: 3rem; 
			}

			.my-2-r{
			  margin-top: 2rem;
			  margin-bottom: 2rem; 
			}

			.my-1-r{
			  margin-top: 1rem;
			  margin-bottom: 1rem; 
			}


			/****************************/
			/*        margin x          */
			/*      tipo : pixeles      */
			/****************************/


			.mx-10-px{
			  margin-left: 10px;
			  margin-right: 10px; 
			}

			.mx-20-px{
			  margin-left: 20px;
			  margin-right: 20px; 
			}

			.mx-30-px{
			  margin-left: 30px;
			  margin-right: 30px; 
			}

			.mx-40-px{
			  margin-left: 40px;
			  margin-right: 40px; 
			}

			.mx-50-px{
			  margin-left: 50px;
			  margin-right: 50px; 
			}

			.mx-60-px{
			  margin-left: 60px;
			  margin-right: 60px; 
			}

			.mx-70-px{
			  margin-left: 70px;
			  margin-right: 70px; 
			}

			.mx-80-px{
			  margin-left: 80px;
			  margin-right: 80px; 
			}



			/****************************/
			/*         margin x         */
			/*     tipo : porcentage    */
			/****************************/


			.mx-10-p{
			  margin-left: 10%;
			  margin-right: 10%; 
			}

			.mx-9-p{
			  margin-left: 9%;
			  margin-right: 9%; 
			}

			.mx-8-p{
			  margin-left: 8%;
			  margin-right: 8%; 
			}

			.mx-7-p{
			  margin-left: 7%;
			  margin-right: 7%; 
			}

			.mx-6-p{
			  margin-left: 6%;
			  margin-right: 6%; 
			}

			.mx-5-p{
			  margin-left: 5%;
			  margin-right: 5%; 
			}

			.mx-4-p{
			  margin-left: 4%;
			  margin-right: 4%; 
			}

			.mx-3-p{
			  margin-left: 3%;
			  margin-right: 3%; 
			}

			.mx-2-p{
			  margin-left: 2%;
			  margin-right: 2%; 
			}

			.mx-1-p{
			  margin-left: 1%;
			  margin-right: 1%; 
			}



			/****************************/
			/*         margin x         */
			/*        tipo : rem        */
			/****************************/


			.mx-10-r{
			  margin-left: 10rem;
			  margin-right: 10rem; 
			}

			.mx-9-r{
			  margin-left: 9rem;
			  margin-right: 9rem; 
			}

			.mx-8-r{
			  margin-left: 8rem;
			  margin-right: 8rem; 
			}

			.mx-7-r{
			  margin-left: 7rem;
			  margin-right: 7rem; 
			}

			.mx-6-r{
			  margin-left: 6rem;
			  margin-right: 6rem; 
			}

			.mx-5-r{
			  margin-left: 5rem;
			  margin-right: 5rem; 
			}

			.mx-4-r{
			  margin-left: 4rem;
			  margin-right: 4rem; 
			}

			.mx-3-r{
			  margin-left: 3rem;
			  margin-right: 3rem; 
			}

			.mx-2-r{
			  margin-left: 2rem;
			  margin-right: 2rem; 
			}

			.mx-1-r{
			  margin-left: 1rem;
			  margin-right: 1rem; 
			}
		");
	}


	public function hw($fl){
		$hw = fopen($fl.'/assets/styles/hw.css', 'a');
		fwrite($hw, "
			/****************************/
			/*      tamaños : ancho     */
			/*      tipo : pixeles      */
			/****************************/



			.w-100-px{
			  width: 100px;
			}

			.w-200-px{
			  width: 200px;
			}

			.w-300-px{
			  width: 300px;
			}

			.w-400-px{
			  width: 400px;
			}

			.w-500-px{
			  width: 500px;
			}

			.w-600-px{
			  width: 600px;
			}

			.w-700-px{
			  width: 700px;
			}

			.w-800-px{
			  width: 800px;
			}



			/****************************/
			/*      tamaños : ancho     */
			/*     tipo : porcentage    */
			/****************************/


			.w-100-p{
			  width: 100%;
			}

			.w-90-p{
			  width: 90%;
			}

			.w-80-p{
			  width: 80%;
			}

			.w-70-p{
			  width: 70%;
			}

			.w-60-p{
			  width: 60%;
			}

			.w-50-p{
			  width: 50%;
			}

			.w-40-p{
			  width: 40%;
			}

			.w-30-p{
			  width: 30%;
			}

			.w-20-p{
			  width: 20%;
			}

			.w-10-p{
			  width: 10%;
			}



			/****************************/
			/*      tamaños : ancho     */
			/*     tipo : view width    */
			/****************************/


			.w-100-v{
			  width: 100vw;
			}

			.w-90-v{
			  width: 90vw;
			}

			.w-80-v{
			  width: 80vw;
			}

			.w-70-v{
			  width: 70vw;
			}

			.w-60-v{
			  width: 60vw;
			}

			.w-50-v{
			  width: 50vw;
			}

			.w-40-v{
			  width: 40vw;
			}

			.w-30-v{
			  width: 30vw;
			}

			.w-20-v{
			  width: 20vw;
			}

			.w-10-v{
			  width: 10vw;
			}



			/****************************/
			/*      tamaños : ancho     */
			/*      tipo : pixeles      */
			/****************************/



			.h-100-px{
			  height: 100px;
			}

			.h-200-px{
			  height: 200px;
			}

			.h-300-px{
			  height: 300px;
			}

			.h-400-px{
			  height: 400px;
			}

			.h-500-px{
			  height: 500px;
			}

			.h-600-px{
			  height: 600px;
			}

			.h-700-px{
			  height: 700px;
			}

			.h-800-px{
			  height: 800px;
			}



			/****************************/
			/*      tamaños : ancho     */
			/*     tipo : porcentage    */
			/****************************/


			.h-100-p{
			  height: 100%;
			}

			.h-90-p{
			  height: 90%;
			}

			.h-80-p{
			  height: 80%;
			}

			.h-70-p{
			  height: 70%;
			}

			.h-60-p{
			  height: 60%;
			}

			.h-50-p{
			  height: 50%;
			}

			.h-40-p{
			  height: 40%;
			}

			.h-30-p{
			  height: 30%;
			}

			.h-20-p{
			  height: 20%;
			}

			.h-10-p{
			  height: 10%;
			}



			/****************************/
			/*      tamaños : ancho     */
			/*     tipo : view width    */
			/****************************/


			.h-100-v{
			  height: 100vh;
			}

			.h-90-v{
			  height: 90vh;
			}

			.h-80-v{
			  height: 80vh;
			}

			.h-70-v{
			  height: 70vh;
			}

			.h-60-v{
			  height: 60vh;
			}

			.h-50-v{
			  height: 50vh;
			}

			.h-40-v{
			  height: 40vh;
			}

			.h-30-v{
			  height: 30vh;
			}

			.h-20-v{
			  height: 20vh;
			}

			.h-10-v{
			  height: 10vh;
			}
		");	
	}
}

?>