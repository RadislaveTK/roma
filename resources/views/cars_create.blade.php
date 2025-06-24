<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teach Car</title>
    <link rel="stylesheet" href="/files/style.css">
    <link rel="stylesheet" href="/files/HomeStyle.css">
</head>
<body>

<header>
    <div class="logo">TC <span>Teach Car</span></div>
    <div class="menu">&#9776;</div>
</header>

<section class="hero">
    <img src="/images/autoschool.jpg" alt="Autoschool">
    <h1>Вождение — это искусство</h1>
    <div class="hero-buttons">
        <button data-card="cars-card">Наши автомобили</button>
        <button data-card="price-card">Цена</button>
        <button data-card="courses-card">Наши услуги</button>
    </div>

    <!-- КАРТОЧКИ -->
    <div class="info-cards">
        <div class="card" id="cars-card">
            <h3>Наши автомобили</h3>
            @foreach ($cars as $car)
                <p>{{ $car->name }}</p>
            @endforeach
            {{-- <p>VW Golf<br>BMW E30<br>Toyota RAV4<br>Skoda Octavia<br>Kamaz<br>Газель</p> --}}
        </div>
        <div class="card" id="price-card">
            <h3>Цена</h3>
            {{-- <p>Курс автомат: 40.000₸<br>
                Курс МКПП: 30.000₸<br>
                Курс с прицепом: 35.000₸<br>
                Курс грузовой: 70.000₸<br>
                Мотоцикл: 40.000₸<br>
                Экстремальное вождение: 80.000₸</p> --}}
            @foreach ($services as $service)
                <p>{{ $service->name }}: {{ $service->price }}</p>
            @endforeach
        </div>
        <div class="card" id="courses-card">
            <h3>Наши курсы</h3>
            <p>Курс автомат: 40.000₸<br>
                Курс МКПП: 30.000₸<br>
                Курс с прицепом: 35.000₸<br>
                Курс грузовой: 70.000₸<br>
                Мотоцикл: 40.000₸<br>
                Экстремальное вождение: 80.000₸</p>
        </div>
    </div>
</section>

<section class="procces">
  <h2>Учебный процесс</h2>
  <div class="slider">
      <button class="prev">&#10094;</button>
      <div class="slides">
          <img src="/images/slide1.jpg" alt="Слайд 1" class="slide active">
          <img src="/images/slide2.jpg" alt="Слайд 2" class="slide">
          <img src="/images/slide3.jpg" alt="Слайд 3" class="slide">
      </div>
      <button class="next">&#10095;</button>
  </div>
</section>


<section class="why-us">
    <h2>ПОЧЕМУ ВЫБИРАЮТ НАС?</h2>
    <div class="features">
        <div>
            <h4>Поддержка 24/7</h4>
            <p>Мы всегда на связи с нашими учениками.</p>
        </div>
        <div>
            <h4>Лучший сервис</h4>
            <p>Современные авто и квалифицированные инструкторы.</p>
        </div>
        <div>
            <h4>95% получили ВУ</h4>
            <p>Большинство наших учеников успешно сдают экзамен.</p>
        </div>
    </div>
</section>

<section class="form-section">
    <h2>Оставьте заявку</h2>
    <form>
        <input type="text" placeholder="Имя" required>
        <input type="tel" placeholder="Телефон" required>
        <input type="email" placeholder="Email" required>
        <button type="submit">Отправить</button>
    </form>
</section>

<footer>
    <p>© Teach Car 2025</p>
    <div class="contacts">
        <span>📍 Алматы, Казахстан</span>
        <span>📞 +7 (777) 000-00-00</span>
        <span>💬 info@teachcar.kz</span>
    </div>
</footer>

<!-- ПОДКЛЮЧЕНИЕ JS -->
<script src="/files/JavaHome.js"></script>
</body>
</html>
