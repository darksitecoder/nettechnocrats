<?php 
$Host="localhost";
$UserName="nettech1_nettech";
$Password="nettechn_nettech@123";
$DBName="nettech1_nettechn_nettech";
$conn = mysqli_connect($Host, $UserName, $Password, $DBName);
define("SITEURL","https://www.nettechnocrats.com/");

header('Content-type: application/xml; charset=utf-8');

echo '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';



echo '
<url>
  <loc>https://www.nettechnocrats.com/</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/aboutus.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/certification.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/partners.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/methodology.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/testimonial.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/client.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/web-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/mobile-app-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/enterprise-software-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/digital-marketing.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/quality-assurance.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/ui-ux-design-services.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/real-state-portal-development-company.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/medical-healthcare-app-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/tour-travel-app-development-company.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/automobile-software-solutions.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/retailer-wholeseller.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/finance-banking-software-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/media-advertisement.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/education-portal-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/asp.net-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/c-sharp-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/sharepoint-migration.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/cake-php-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/zend-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/lamp-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/codeigniter-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/laravel-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/python-django-development-company.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/cloud-computing.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/big-data-analytics.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/chatbot-development-company.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/ibeacon-app-development-company.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/iot-applications-development-company.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/blockchain-application-development-company.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/data-science.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/ai-application-development-company.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/nodejs-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/angular-js-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/wordpress-development-services.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/magento-web-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/joomla-web-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/drupal-web-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/microsoft-dynamics-crm.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/salesforce-developement.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/portfolio.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/blog/</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/contact.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/iphone-application-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/android-app-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/wearable-app-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/swift-cross-platform-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/seo-services.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/smo-services.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/ppc-services.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/blog/hire-a-top-rated-magento-development-company-in-india-to-develop-your-ecommerce-store/</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/blog/how-to-find-a-reliable-and-white-label-seo-reseller-company-/</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/blog/what-is-a-back-end-development-service-and-its-objectives-/</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/amazon-web-services.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/case-study/zangi-safe.html</loc>
  <lastmod>2019-05-25T19:13:00+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/erp-software-development-company.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/crm-software-development.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/content-writing-services.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/online-reputation-management-services.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/local-seo-services.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/video-marketing.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/email-marketing.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/amazon-seo-services.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/amazon-ppc-services.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/e-commerce-seo-services.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/seo-reseller.php</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/blog/take-your-business-to-new-heights-with-the-best-front-end-web-development-services/</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/blog/when-to-hire-a-web-development-company-to-redesign-your-website-/</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/blog/what-are-the-vital-factors-that-determine-the-cost-of-web-app-development-/</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/blog/things-to-consider-while-you-opt-for-magento-web-development-services/</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/blog/who-is-a-full-stack-web-developer-and-what-skills-he-she-should-have-/</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/blog/the-latest-5-iphone-app-development-trends-to-keep-in-mind/</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/blog/6-web-development-services-that-your-business-needs/</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/blog/hire-an-android-app-development-company-to-meet-your-needs/</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/blog/5-most-common-services-offered-by-the-best-seo-company/</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/blog/how-to-hire-a-chatbot-development-agency-key-points-to-consider/</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/blog/the-7-most-common-mistakes-youre-doing-wrong-while-web-application-development/</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.nettechnocrats.com/blog/why-its-better-to-hire-an-seo-reseller-company-than-seo-service-providers-/</loc>
  <lastmod>2019-10-14T05:21:02+00:00</lastmod>
  <priority>0.64</priority>
</url>';


$sql = "SELECT * FROM tbl_blog ";
$query= $conn->query($sql);

while($row= mysqli_fetch_assoc($query))
{
	echo '<url><loc>'.SITEURL.'blog/'.$row['slug'].'/</loc><changefreq>daily</changefreq><priority>0.80</priority></url>';
}
echo '</urlset>';
?>