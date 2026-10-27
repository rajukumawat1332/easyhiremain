<?php
function e($s){return htmlspecialchars((string)$s,ENT_QUOTES);}
function ini($s){return strtoupper(substr(trim($s)?:'U',0,1));}
$user=['name'=>'Alex Morgan','about'=>'Friendly and reliable, with 3 years in hospitality.','age'=>'27','phone'=>'+61 400 123 456','location'=>'Sydney NSW','nationality'=>'Australian','qualification'=>'Certificate III in Hospitality','experience'=>'3 years','salary'=>'$30/hr','emptype'=>'Part Time','industry'=>'Hospitality, Retail'];
$jobs=[
['id'=>1,'title'=>'Barista','company'=>'Bean & Co','loc'=>'Sydney NSW','cat'=>'Hospitality','type'=>'Part Time','salary'=>'$28/hr','desc'=>'Make specialty coffee and serve customers in a busy cafe.'],
['id'=>2,'title'=>'Warehouse Assistant','company'=>'FastMove Logistics','loc'=>'Parramatta NSW','cat'=>'Logistics','type'=>'Full Time','salary'=>'$32/hr','desc'=>'Pick, pack and dispatch orders. Forklift ticket preferred.'],
['id'=>3,'title'=>'Retail Sales Associate','company'=>'UrbanStyle','loc'=>'Melbourne VIC','cat'=>'Retail','type'=>'Casual','salary'=>'$27/hr','desc'=>'Help shoppers, manage stock and operate the register.'],
['id'=>4,'title'=>'Kitchen Hand','company'=>'Olive Garden Bistro','loc'=>'Brisbane QLD','cat'=>'Hospitality','type'=>'Casual','salary'=>'$26/hr','desc'=>'Support chefs with prep, cleaning and dishwashing.'],
['id'=>5,'title'=>'Construction Labourer','company'=>'BuildRight','loc'=>'Perth WA','cat'=>'Construction','type'=>'Full Time','salary'=>'$36/hr','desc'=>'General site duties. White card required.'],
['id'=>6,'title'=>'Customer Service Rep','company'=>'HelpDesk Plus','loc'=>'Sydney NSW','cat'=>'Office','type'=>'Full Time','salary'=>'$75,000/yr','desc'=>'Answer customer enquiries by phone and email.'],
];
$categories=['Hospitality','Logistics','Retail','Construction','Office'];
$interviews=[
['title'=>'Barista at Bean & Co','date'=>'Fri 30 Oct, 10:00 AM','mode'=>'In person','status'=>'Confirmed'],
['title'=>'Warehouse Assistant at FastMove','date'=>'Mon 2 Nov, 2:30 PM','mode'=>'Video call','status'=>'Pending'],
['title'=>'Retail Associate at UrbanStyle','date'=>'Wed 4 Nov, 9:00 AM','mode'=>'Phone','status'=>'Confirmed'],
];
$notifications=[
['🔔','New job match: Barista at Bean & Co','2h ago'],
['📩','FastMove Logistics invited you to interview','5h ago'],
['✅','Your application to UrbanStyle was viewed','Yesterday'],
['👤','Someone applied to your Kitchen Hand post','2 days ago'],
];
$plans=[['Monthly','$9.99','per month','Unlimited applications'],['Quarterly','$24.99','per 3 months','Save 17% + priority support'],['Yearly','$89.99','per year','Best value + featured profile']];
$candidates=[
['Priya Sharma','Hospitality','Sydney NSW','4 years'],['Liam O\'Brien','Construction','Perth WA','6 years'],
['Mei Chen','Retail','Melbourne VIC','2 years'],['Tom Walker','Logistics','Parramatta NSW','5 years'],['Sara Ali','Office','Sydney NSW','3 years'],
];
$places=['Sydney CBD, NSW','Parramatta, NSW','Melbourne CBD, VIC','Brisbane City, QLD','Perth CBD, WA'];
$industries=['Hospitality','Retail','Logistics','Construction','Office','Healthcare','Education','Technology'];
$common=[
['k'=>'name','l'=>'What is your name?','t'=>'text'],
['k'=>'about','l'=>'Tell us about you','t'=>'area'],
['k'=>'age','l'=>'How old are you?','t'=>'number'],
['k'=>'phone','l'=>'Phone number','t'=>'tel'],
['k'=>'otp','l'=>'Enter the OTP (demo code: 1234)','t'=>'otp'],
];
$empSteps=[
['k'=>'location','l'=>'Where are you located?','t'=>'loc'],
['k'=>'nationality','l'=>'Nationality','t'=>'text'],
['k'=>'qualification','l'=>'Highest qualification','t'=>'text'],
['k'=>'tickets','l'=>'Tickets and licences (White Card, RSA, Forklift…)','t'=>'text'],
['k'=>'experience','l'=>'Years of experience','t'=>'text'],
['k'=>'salary','l'=>'Expected salary','t'=>'text'],
['k'=>'emptype','l'=>'Employment type','t'=>'radio'],
['k'=>'industry','l'=>'Preferred industries','t'=>'multi'],
['k'=>'picture','l'=>'Upload a profile picture','t'=>'file'],
['k'=>'cv','l'=>'Upload your CV','t'=>'file'],
];
$bossSteps=[
['k'=>'company','l'=>'Company name','t'=>'text'],
['k'=>'location','l'=>'Company location','t'=>'loc'],
['k'=>'industry','l'=>'Industry','t'=>'multi'],
['k'=>'position','l'=>'Position you are hiring for','t'=>'text'],
['k'=>'emptype','l'=>'Employment type','t'=>'radio'],
['k'=>'salary','l'=>'Salary offered','t'=>'text'],
['k'=>'jobdetail','l'=>'Job details','t'=>'area'],
['k'=>'logo','l'=>'Upload company logo','t'=>'file'],
];
