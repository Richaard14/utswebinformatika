<div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>BERITA TERBARU</h3>
        <h4>4 Siswa Indonesia Raih Medali Informatika</h4>
        <h5>11 Agustus, 2025</h5>
        <p>Sebanyak empat siswa Indonesia berhasil meraih empat medali di ajang Olimpiade Informatika Internasional atau International Olympiad in Informatics (IOI) ke-37.<br /><a href="https://www.kompas.com/edu/read/2025/08/11/192645371/4-siswa-indonesia-raih-medali-di-olimpiade-informatika-internasional">Read more</a></p>
        <p></p>
        <h4>Olimpiade TIK dan Informatika Nasional (OTN) 2025</h4>
        <h5>17 Oktober, 2025</h5>
        <p>Breaking News Olimpiade TIK dan Informatika Nasional (OTN) 2025: Ribuan Siswa dari Seluruh Indonesia Antusias Ikuti Ajang di Hall 8 ICE BSD Serpong.<br /><a href="https://www.melintas.id/news/346712435/breaking-news-olimpiade-tik-dan-informatika-nasional-otn-2025-ribuan-siswa-dari-seluruh-indonesia-antusias-ikuti-ajang-di-hall-8-ice-bsd-serpong">Read more</a></p>
        <h3>Link Pembelajaran</h3>
        <ul>
          <li><a href="https://www.w3schools.com/ ">w3schools</a></li>
          <li><a href="https://www.codecademy.com/">codecademy</a></li>
          <li><a href="https://www.codewars.com/">codewars</a></li>
          <li><a href="https://www.freecodecamp.org/">freecodecamp</a></li>
        </ul>
        <h3>Search</h3>
        <form method="GET" action="{{ route('search') }}" id="search_form">
          <p>
            <input class="search" type="text" name="query" placeholder="Enter keywords....." 
                   onfocus="if(this.value=='Enter keywords.....'){this.value='';}"
                   onblur="if(this.value==''){this.value='Enter keywords.....';}" />
            <input type="submit" value="Search" class="submit-search" />
          </p>
        </form>
      </div>