
        jQuery(document).ready(function ($) {
			
			var _CaptionTransitions = [];
			
			
			_CaptionTransitions["L"] = { $Duration: 800, $FlyDirection: 1, $Easing: $JssorEasing$.$EaseInCubic };
            _CaptionTransitions["R"] = { $Duration: 800, $FlyDirection: 2, $Easing: $JssorEasing$.$EaseInCubic };
            _CaptionTransitions["Tbackup"] = { $Duration: 800, $FlyDirection: 0, $Easing: $JssorEasing$.$EaseInCubic };
            _CaptionTransitions["B"] = { $Duration: 800, $FlyDirection: 8, $Easing: $JssorEasing$.$EaseInCubic };
            _CaptionTransitions["TL"] = { $Duration: 800, $FlyDirection: 5, $Easing: $JssorEasing$.$EaseInCubic };
            _CaptionTransitions["TR"] = { $Duration: 800, $FlyDirection: 6, $Easing: $JssorEasing$.$EaseInCubic };
            _CaptionTransitions["BL"] = { $Duration: 800, $FlyDirection: 9, $Easing: $JssorEasing$.$EaseInCubic };
            _CaptionTransitions["FADE"] = { $Duration: 800, $FlyDirection: 0, $Easing: $JssorEasing$.$EaseInCubic };

            _CaptionTransitions["WAVE|L"] = { $Duration: 1500, $FlyDirection: 5, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseOutWave }, $ScaleVertical: 0.4, $Round: { $Top: 2.5} };
            _CaptionTransitions["MCLIP|B"] = { $Duration: 600, $Clip: 8, $Move: true, $Easing: $JssorEasing$.$EaseOutExpo };
			
			_CaptionTransitions["T"] = {$Duration:900,$Clip:12,$Easing:{$Clip:$JssorEasing$.$EaseInOutCubic},$Opacity:2}
            var _SlideshowTransitions = [
			  {$Duration:1000,$Opacity:2,$Brother:{$Duration:1000,$Opacity:2}}
            ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 5000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 3,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 3

                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 300,                                //Specifies default duration (swipe) for slide in milliseconds
                $FillMode:1,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actuall size, default value is 0

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: false                                 //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $DirectionNavigatorOptions: {                       //[Optional] Options to specify and enable direction navigator or not
                    $Class: $JssorDirectionNavigator$,              //[Requried] Class to create direction navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                },

                $ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
					$AutoCenter: 1, 
                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $SpacingX: 5,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 8.75,                             //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 2,                           //[Optional] The offset position to park thumbnail
					$Lanes: 1
                },
				
				$CaptionSliderOptions: {
					$Class: $JssorCaptionSlider$,
					$CaptionTransitions: _CaptionTransitions,
					$PlayInMode: 0,
					$PlayOutMode: 0
				},
            };
			
			
			//var isiPad = navigator.userAgent.match(/iPad/i) != null;
			if (navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) { 
				options.$ThumbnailNavigatorOptions.$Lanes = 1; 
			}
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
			
			function OnSlidePark(slideIndex, fromIndex) {
				$("#outer-caption").html($("#caption-slide-" + slideIndex).html());
			}
			OnSlidePark(0, -1);		
			
			jssor_slider1.$On($JssorSlider$.$EVT_PARK, OnSlidePark);
						
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
				var temp1 = jssor_slider1.$Elmt.clientWidth;
				var temp2 = jssor_slider1.$Elmt.clientHeight;
				//var bodyHeight = (window.innerHeight - 130) * 1.43;
				var bodyHeight = (window.innerHeight -160) * 1.43; //07Oct15
//				document.title = bodyHeight + '       ' + temp1 + '       ' + temp2+ '       ' + (temp1/temp2);
				//no bigger than 1000
				//reduce according to width
				//reduce according to height
				//get smaller of height/width
				//get larger of 1000 & height/width
				
				var picHeight = Math.min(1000,Math.min(parentWidth, bodyHeight)); //max 1000; bodyHeight never more than width
                if (picHeight)
				{		
					jssor_slider1.$SetScaleWidth(Math.max(picHeight,200));
				}
				else
	                window.setTimeout(ScaleSlider,30);
				

				
				
			/*	
				if (bodyHeight)
				{
					if (bodyHeight<700)
					  jssor_slider1.$SetScaleWidth(Math.max(Math.min(bodyHeight,700),100));
					else
					
					
					
					
                if (parentWidth)
//					jssor_slider1.$SetScaleWidth(parentWidth);
                    jssor_slider1.$SetScaleWidth(Math.max(Math.min(parentWidth, 1000), 100));
//					jssor_slider1.$SetScaleHeight(
                else
                    window.setTimeout(ScaleSlider, 30);
				}
//				var parentHeight = jssor_slider1.$Elmt.parentNode.clientHeight;
//				if (parentHeight)
//                    jssor_slider1.$SetScaleWidth(Math.max(Math.min(parentHeight*2, 700), 100));


				else
	                window.setTimeout(ScaleSlider,30);
*/					
            }

            ScaleSlider();
			//$("slider1_container").addClass("shadow");
			
			$("img").addClass("shadow");


            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }
        });
