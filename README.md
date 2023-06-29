<p><h2 style="text-align: center">أهلا وسهلا</h2></p>

<div style="direction: rtl">

## تثبيت المشروع

<p>
في البداية نحتاج نثبت php8.1 ، ممكن نثبته عن طريق XAMPP واللي يوفر لنا Local server ونثبت أيضا Composer
</p>

<p>
بعد التثبيت، ندخل على مجلد المشروع وعن طريق الcmd أو الterminal ننفذ التالي
</p>

``
composer install
``

<p>
وهذا بيثبت لنا ملفات الframework
</p>

<p>

بعدها ننفذ الأمر التالي واللي بينشئ لنا ملف ``.env`` وبيعبيه ببعض البيانات الاساسية واللي بنضيف عليها

</p>

``
cp .env.example .env
``

<p>

بنحتاج الحين نسوي قاعدة بيانات، عن طريق XAMPP نقدر ندخل على phpmyadmin ونسوي قاعدة بيانات جديدة ونسميها ``alnamas``
</p>

<p>
والحين ننشئ المفتاح الخاص بالتطبيق (حاجات لها علاقة بالتشفير والأمان في framework المهم انه لازم نسويه ومش مهم نفهمه الحين ههه)
</p>

``
php artisan key:generate
``

<p>والحين الخطوة الأخيرة أننا نشغل الmigrations ، وهذي هي اللي بتنشئ لنا جداول قاعدة البيانات (تفاصيل الmigrations موجودة في مجلد database/migrations للاطلاع)</p>

``
php artisan migrate
``

والحين نشغل المشروع الأمر التالي

``
php artisan serve
``

ولمعلومات أكثر عن Laravel فيه هالمصدرين ممتازة ومعتمدة من قبل framework نفسها
- [Documentation](https://laravel.com/docs) , هذا الموقع الرسمي
- [Laracasts](https://laracasts.com)

## المهام

### 

</div>
