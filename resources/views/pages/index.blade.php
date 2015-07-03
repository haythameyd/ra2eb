@extends('app')

@section('title')
<title>Ra2eb . راقب 
	| الصفحة الرئيسية</title>
@stop

@section('body')

<div class="map-container">
		<iframe title="مشروعات الخطة" src="https://mapsengine.google.com/map/embed?mid=zd4Pnh74js9Q.kucBCDsiW3As" height="550" width="100%" frameBorder="0"><h1><a href="https://mapsengine.google.com/map/embed?mid=zd4Pnh74js9Q.kucBCDsiW3As">خريطة المشروعات المصريه - راقب</a></h1></iframe>
	</div>
	
	<!-- About Us 
	================================================== -->
	<a id="about" class="anchor"></a>
	<div class="about-us-container">
		<div class="row">
		<div class="col-md-2 sectionheading">
			<h3>&nbsp;عن المبادرة</h3>
			<img class="" src="img/underline_main.png" alt="underline"  height='3' width='52'>
		</div>
		<div class="col-md-3">
			<p>"
			تهدف المبادره الي التواصل مع الجمهور بشأن مشاريع الخطة العامة للحكومة المصرية و التي تقوم وزارة التعاون الدولي في بعض الأحيان بتمويلها و دعمها في مختلف القطاعات في جميع محافظات الجمهورية. كما تهدف المبادرة الى امداد المواطنين بالمعلومات الكافية عن تلك المشاريع و تلقي الشكاوي و التقييم منهم عن مدى فاعلية هذه المشاريع و مدي استفادتهم منها.
			</p>
		</div>
		<div class="col-md-3">
			<iframe height="240" frameBorder="0" src="http://www.youtube.com/embed/7Uw29pcCftk?rel=0&controls=0&showinfo=0&theme=light"></iframe>
		</div>
		<div class="col-md-3">
			<p>كما يقوم الفريق القائم علي المبادرة بزيارات ميدانية لتلك المشاريع بهدف اجراء مقابلات مع الجمهور المستفيد منها و نشر تقارير مصورة عن تلك المقابلات علي حساب المبادرة علي اليوتيوب <a href="http://www.youtube.com/user/ra2ebvideos">Ra2ebVideos</a>. تسعى المبادرة الى خلق شراكة حقيقية بين المواطن و الحكومة فى تقييم المشروعات التى تقوم بتنفيذها و سرعة رصد و ازالة المعوقات التى قد تظهر اثناء او بعد التنفيذ و هى مبادرة لتحسين الاداء الحكومى فيما يخص الرقابة و المتابعة و تقديم قيمة مضافة للمشروعات الحالية و الخطط المستقبلية من خلال تقييم المشروعات تقييما نابعا من الجمهور المستفيد بإستخدام ادوات التحليلى الكمي.
			</p>
		</div>
		<div class="col-md-3 col-md-offset-2">
			<p>كما أن المبادرة لا تعد بأي شكل من الأشكال بديلا لأي من اعمال الرقابة التى تمارسها اجهزة الدولة المعنية بذلك و دون اى انتقاص او تعارض مع صلاحيات الاجهزة الرقابية الرسمية التى لها الحق فى الاطلاع على الافادات و التقارير الاهلية التى ترد للمبادرة لإستخدامها فى اعمال الرقابة الموكله اليها بقوة القانون.
			</p>
		</div>
		<div class="col-md-3 text-center">
			<p>و تدعو وزارة التخطيط و التعاون الدولي جموع المصريين للمشاركة في هذه المبادرة من خلال ارسال آرائهم و تقييمهم كأحد المستفيدين من تلك المشاريع المختلفة, مما يساعد الوزارة في مراقبة تلك المشروعات بشكل أفضل و ضمان تحقيق أعلي استفادة للمواطنين من المشاريع المقدمة من جانب الدولة و دعم الجهود التي تبذلها الحكومة لخدمة المواطنين.
			</p>
		</div>
		<div class="col-md-3 text-center">
			<button type="button" class="btn btn-lg color-b" data-toggle='modal' data-target='#knowhow1'>
			<span class="glyphicon glyphicon-circle-arrow-down"></span>
			أدوات المعرفة، المشاركة و الرقابة
			</button>
			<p></p>
			<button type="button" class="btn btn-lg color-b" data-toggle='modal' data-target='#knowhow2'>
			<span class="glyphicon glyphicon-circle-arrow-down"></span>
			كيف نراقب على المشروعات
			</button>
		</div>
		</div>
	</div>
	
	<!-- Reports 
	================================================== -->
	<a id="reports" class="anchor"></a>
	<div class="row reports-container">
		<div class="col-md-2">
			<h3>قيِّم المشاريع</h3>
			<img class="" src="img/underline_main.png" alt="underline" height='3' width='52'>
		</div>
		<div class="col-md-9 text-center">
		<h4>شارك في تقييم مستوى جودة المشروعات سواءا كمواطن أو منظمة أهلية تعمل داخل نطاق الجمهورية
			</h4>
			<a href="faq.html" target="_blank">أسئلة شائعة&nbsp; <span class='glyphicon glyphicon-question-sign'>&nbsp;</span></a>
			<br><br>
			<a class="btn btn-primary btn-lg" href="review/">مواطن</a>
			<button type="button" class="btn btn-info btn-lg" data-toggle='modal' data-target='#organization'>منظمة</button>
			<hr>
			<h4>
			 قم بالاطلاع على التقارير الوارده إلينا بخصوص احتياجات المواطنين في مختلف محافظات الجمهورية
			</h4>
			<form method='post' action='#'>
				<div class='input-group img-center reportsform'>
					<select class='form-control' name='report_name' title="Reports">
					  <option>لا يوجد تقارير</option>
					</select>
					<span class='input-group-btn'>
					<button type='submit' title="Submit" class='btn btn-success'>حمل التقرير&nbsp;<span class='glyphicon glyphicon-floppy-save'></span></button>
					</span>
				</div>
			</form>
			
		</div>
			
	</div>
	
	<!-- Contact Us 
	================================================== -->
	<a id="contact" class="anchor"></a>
	<div class="contact-us-container">
		<div class="row">
		<div class="col-md-2 sectionheading">
			<h3>&nbsp;تواصل معنا</h3>
			<img class="" src="img/underline_main.png" alt="underline" height='3' width='52'>
		</div>
		<div class="media col-md-3 offset3 text-center">
		  <span class="glyphicon glyphicon-earphone"></span>
		  <div class="media-body">
			<h4 class="media-heading">التليفون</h4><p>0223910008-0223908819</p>
		  </div>
		</div>
		<div class="media col-md-3 text-center">
		  <span class="glyphicon glyphicon-map-marker"></span>
		  <div class="media-body">
			<h4 class="media-heading"> العنوان</h4><p>8 ش عدلي, وسط البلد, القاهرة</p>
		  </div>
		</div>
		<div class="media col-md-3 text-center">
		  <span class="glyphicon glyphicon-envelope"></span>
		  <div class="media-body">
			<h4 class="media-heading">الايميل</h4><p>info@ra2eb.com</p>
		  </div>
		</div>
		<div class="col-md-9 col-md-offset-2 text-center">
			<hr>
			<br>
			<h4>
		    الآن يمكنك التطوع في المبادرة و أن تصبح جزءا من منظومة الرقابة الشعبية لمشروعات الحكومة
			</h4>
			<a href="https://docs.google.com/forms/d/1EYCNLIxXivSZWLDyI4K5bItDqdzeNO3oc5INLVM8Jgc/viewform" target="_blank" class="btn btn-warning btn-lg color-b" >تطوع معنا</a>
		</div>
		<div class="col-md-4 col-md-offset-5 text-center">
		<br>
		<form action="http://ra2eb.us8.list-manage.com/subscribe/post?u=55e276383e0d3ceb450995da6&amp;id=1aed42e1ea" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div class="input-group">
			<input type="text" title="البريد الالكتروني" class="form-control" placeholder="البريد الالكتروني" name="EMAIL" id="mce-EMAIL" required>
			  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				<div><input type="text" title="Empty" name="b_55e276383e0d3ceb450995da6_1aed42e1ea" value="" hidden></div>
		      <span class="input-group-btn">
		        <button class="btn btn-warning" type="submit" title="اشترك" name="subscribe" id="mc-embedded-subscribe"><span class="color-b">اشترك في القائمة البريدية</span></button>
		      </span>
		      
		    </div>
		</form>
		</div>
		</div>
	</div>
	
	<!-- Videos 
	================================================== 	-->
	<a id="videos" class="anchor"></a>
	<div class="row videos-container">
		<div class="col-md-1">
			<h3>فيديو</h3>
			<img class="" src="img/underline_main.png" alt="underline" height='3' width='52'>
		</div>
		<div class="col-md-10">
			<iframe width="100%" height="400" src="//www.youtube.com/embed/videoseries?list=PL7hph-7tIDSTzuKjJ5Hao7mVs_wMOZFf6" frameborder="0"></iframe>
		</div>
	</div>

@stop

@section('footerscript')

<!-- Modal Organizational Report -->
   

		<div class="modal fade bs-example-modal-sm" id="organization" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel2">تقييم المنظمات/المبادرات لمشاريع الخطة</h4>
				  </div>
				  <div class="modal-body">
					<div class="img-center"><span class="glyphicon glyphicon-tasks text-center orange-glyphicon"></span></div>
					<p>
					إذا كنت ترغب من خلال منظمتك بالمشاركة في مراقبة مشروعات الخطة الاستثماريه للدولة، للمشاركة في تقييم الجودة و تصحيح مسارات العمل و اكتشاف الأخطاء و توجيه المشروعات المستقبليه لصالح المواطنين يمكنك الآن المشاركة في نطاق عمل منظمتك باتباع الخطوات التالية:
					</p>
					<ol>
					<li>قم بتفقد المشاريع المبينة على الخريطة بالقسم الاعلى بالموقع</li>
					<li>قم بارسال تقارير عن أي من المشروعات المبينه على الخريطة كالتالي:</li>
					</ol>
					<ul>
					<li>مشاريع منتهية: حمل نسخة التقرير الآتية  (<a href="docs/project_evaluation.docx" target="_blank">التقرير</a>) و املأها و قم بارسالها لنا عبر البريد الالكتروني علي info@ra2eb.com</li>
					<li>مشاريع قيد التنفيذ: في حالة وجود مخالفات بخصوص المشروع يرجي ملء<a href="docs/project_report.docx" target="_blank"> هذه الاستماره </a> و ارسالها لنا  علي info@ra2eb.com في اسرع وقت حتى يتم اتخاذ اللازم.</li>
					<li>مشاريع هامة للمواطنين في نطاق عمل المنظمة: يتم عمل استطلاع الرأي في منطقة عمل المنظمة و ملء <a href="docs/project_needs_assesment.docx" target="_blank">  هذه الاستماره </a> و تحديد حجم العينه و منهجية استطلاع الآراء و النتائج التي تم التوصل لها و ارسالها لنا عبر البريد الالكتروني info@ra2eb.com </li>
					</ul>
							<button type="button" class="btn" data-dismiss="modal">اغلاق</button>
				  </div>
				</div>
			</div>
		</div>

	<!-- Modal Know How -->
   

		<div class="modal fade bs-example-modal-lg" id="knowhow1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-body">
					<img src="img/infographic-ra2eb.jpg" width="400" height="665" class="img-responsive img-center" alt="آليات الرقابة">
				  </div>
				</div>
			</div>
		</div>
		<div class="modal fade bs-example-modal-lg" id="knowhow2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-body">
					<img src="img/infographic-ra2eb2.jpg" width="450" height="984" class="img-responsive img-center" alt="كيف نراقب">
				  </div>
				</div>
			</div>
		</div>

@stop