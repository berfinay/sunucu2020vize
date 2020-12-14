<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="Aytek Bilgi Sistemi" />
  <meta name="keyword" content="Aytek, bilgi, bilişim, bilgisayar" />
  <title>Aytek Bilgisayar Bilgi Sistemi</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="header">
    <div class="left">
      <div class="bars">
        <i class="fa fa-bars"></i>
      </div>
      <span>Aytek Bilgisayar Sistemleri</span>
    </div>
    <div class="right">
      <div class="notify">
        <div class="calendar">
          <i class="fa fa-calendar-o"></i>
          <i class="fa fa-clock-o"></i>
          <i class="fa fa-circle"></i>
          <div>22</div>
        </div>
        <div class="news">
          <i class="fa fa-newspaper-o"></i>
        </div>
      </div>
      <div class="user">
        <span>Berfin</span>
        <i class="fa fa-angle-down"></i>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="sidebar">
      <div class="top">
        <div class="durum">
          <div class="title">
            <i class="fa fa-dropbox"></i>
            <span>Durum Önizleme</span>
          </div>
        </div>
        <div class="hesaplamalar">
          <div class="title">
            <i class="fa fa-puzzle-piece"></i>
            <span>Hesaplamalar</span>
          </div>
          <i class="fa fa-angle-down"></i>
        </div>
        <div class="oeehesapla">
          <div class="title">
            <span>OEE Hesapla</span>
          </div>
        </div>
        <div class="vergi">
          <div class="title">
            <span>Vergi Hesapla</span>
          </div>
        </div>
        <div class="maliyet">
          <div class="title">
            <span>Maliyet Hesapla</span>
          </div>
        </div>
        <div class="urunler">
          <div class="title">
            <i class="fa fa-line-chart"></i>
            <span>Urunler</span>
          </div>
          <i class="fa fa-angle-right"></i>
        </div>
        <div class="tedarikciler">
          <div class="title">
            <i class="fa fa-table"></i>
            <span>Tedarikçiler</span>
          </div>
        </div>
        <div class="subeler">
          <div class="title">
            <i class="fa fa-road"></i>
            <span>Şubeler</span>
          </div>
        </div>
        <div class="siparisler">
          <div class="title">
            <i class="fa fa-user-secret"></i>
            <span>Siparişler</span>
          </div>
        </div>
        <div class="toplantilar">
          <div class="title">
            <i class="fa fa-calendar"></i>
            <span>Toplantılar</span>
          </div>
        </div>
        <div class="calisanlar">
          <div class="title">
            <i class="fa fa-users"></i>
            <span>Çalışanlar</span>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="navi">
        <i class="fa fa-home"></i>
        <span>Ana Sayfa [İstanbul - Trial]</span>
        <span class="ayrac">/</span>
        <i class="fa fa-globe"></i>
        <span>Asya (İstanbul)</span>
        <i class="fa fa-angle-down"></i>
        <span class="ayrac">/</span>
        <i class="fa fa-file-code-o"></i>
        <span>P2000370742trial</span>
        <span class="ayrac">/</span>
        <i class="fa fa-link" aria-hidden="true"></i>
        <span>trial</span>
        <span class="ayrac">/</span>
        <i class="fa fa-info-circle"></i>
        <span>dev</span>
      </div>
      <div class="head">
        <div class="left">
          <i class="fa fa-puzzle-piece"></i>
          <span>OEE Hesapla</span>
        </div>
        <i class="fa fa-question-circle-o"></i>
      </div>
      <form action="hesapla.php" method="POST">
        <label>Planlanmış Üretim Süresi:</label>
        <input type="text" name="pus">
        <br>
        <br>
        <label>Plansız Duruş:</label>
        <input type="text" name="pd">
        <br>
        <br>
        <label>Standart Çevrim Zamanı:</label>
        <input type="text" name="scz">
        <br>
        <br>
        <label>Üretim Miktarı:</label>
        <input type="text" name="um">
        <br>
        <br>
        <label>Sağlam Ürün Miktarı:</label>
        <input type="text" name="sum">
        <br>
        <br>
        <label>Toplam Üretim Miktarı:</label>
        <input type="text" name="tum">
        <br>
        <br>
        <input type="submit" value="Hesapla & Kaydet">
      </form>
    </div>
  </div>
  </div>
</body>

</html>