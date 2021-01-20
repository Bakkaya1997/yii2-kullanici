<h1 style="color:red"> Şirket Çalışanları Modülü </h1>
<h1><font color="red" size="7" face="tahoma">Şirket Çalışanları Modülü</font></h1>
-Yazdığım modül, bir şirkette kullanılabilecek şekildedir. Yeni bir çalışan eklenebilir, güncellenebilir veya silinebilir.
-Aynı zamanda yeni bir departman eklenebilir, güncellenebilir ve silinebilir.

<h3> Migrations </h3>

Migrations dosyamızda veritabanı işlemlerimiz vardır. Veritabanında iki adet tablo bulunmaktadır. Ve foreign key ile aralarında bağlantı oluşturulmuştur.
Tablolarımız companyuser ve deparment'dır.
Aşağıda phpmyadmin sayfasından tabloları görüyorsunuz:

![Ekran Görüntüsü (113)](https://user-images.githubusercontent.com/47320654/104811347-d4064f80-580b-11eb-9f53-701b088ce67f.png)

<h3> Genel Bilgi </h3>

- Modülüm, MVC yapısına uygun olarak oluşturulmuştur. Model-view-controller yapısı hazırlandıktan sonra asset, layouts yapısı da hazırlanmıştır.
- Yeni bir çalışan yaratılırken seçilen fotoğraf hem veritabanına hem de modül altındaki web klasörü altındaki profiles klasörüne kaydedilmektedir.
- Yine kayıt yapılırken kullanıcıya kolaylık sağlaması amacıyla widget kullanılmıştır. Eğer widget ile alakalı bir hata alınırsa aşağıdaki komutu çalıştırabilirsiniz:

  <pre><code>
  $ composer require 2amigos/yii2-date-picker-widget:~1.0
  </pre></code>
  
  veya aşağıdaki kodu composer.json dosyanıza ekleyebilirsinziz:
  
  <pre><code>
  "2amigos/yii2-date-picker-widget" : "~1.0"
  </pre></code>
  
 - Modülümün controller kısmında AssetControl olayı sağlanmıştır. Bunun için aşağıdaki kod parçası kullanılmıştır:
 
 <pre><code>
  'access' => [
                'class' => AccessControl::className(),
                'only' => ['create', 'update','delete'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ],
  </pre></code>
  
  - Modülümde asset ve layouts dosyaları oluşturulmuştur. Bu dosyaların kullanılabilmesi için modül altındaki kullanici.php dosyasına aşağıdaki tanıtma işlemi yapılmıştır:
  <pre><code>
   $this->layout = 'myLayout';

   $this->setAliases([
   '@products-assets' => dirname(__DIR__). 'vendor/assets'
   ]);
   </pre></code>
   
<h3> Kurulum </h3>

Modülü kendi projenizde kullanmak için packagist.org sitesinden faydalanabilirsiniz. Buraya projenizi ekledikten sonra,
  
   <pre><code>
   composer require --prefer-dist barisakkaya/yii2-kullanici "dev-main"
   </pre></code>
  
Kurulum tarafını yaptıktan sonra, modülü projenize tanıtmanız gerekir. Bunun için backend altındaki config klasöründen main.php dosyasını açıp,
aşağıdaki kodu eklediğinizden emin olun!
 
  <pre><code>
  
   'modules' => [
        'products' => [
            'class' => 'Bakkaya1997\kullanic\Module',
        ],
    ],
  
  </pre></code>
  
  
Gereken işlemleri yaptıktan sonra projenizi ayağa kaldırdığınızdan emin olun:

  <pre><code>
   Vagrant up
  </pre></code>
  
Son olarak veritabanı işlemlerinin de gerçekleşebilmesi için, aşağıdaki komutu çalıştırın:

  <pre><code>
  <php yii migrate/up --migrationPath=@vendor/Bakkaya1997/kullanici/migrations  
  </pre></code>

Modülü kullanabilirsiniz...!

Aşağıda da modülümün ekran kaydını görüyorsunuz:

![view](https://user-images.githubusercontent.com/47320654/105162018-1e950e00-5b23-11eb-848a-75dccb3358ff.gif)


