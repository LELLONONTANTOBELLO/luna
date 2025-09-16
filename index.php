<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miss Caffè - Ogni sorso un sorriso</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">
                <div class="logo-icon"></div>
                <div class="logo-text">
                    <h1>Miss Caffè</h1>
                    <p>Ogni sorso un sorriso</p>
                </div>
            </div>
            
            <nav>
                <button class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#chi-siamo">Chi Siamo</a></li>
                    <li class="dropdown">
                        <a href="#menu">Menu</a>
                        <div class="dropdown-content">
                            <a href="#" data-menu="colazione">Colazione</a>
                            <a href="#" data-menu="aperitivo">Aperitivo</a>
                            <a href="#" data-menu="pranzo">Pranzo</a>
                            <a href="#" data-menu="cena">Cena</a>
                        </div>
                    </li>
                    <li><a href="#eventi">Eventi</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contatti">Contatti</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <section id="home" class="hero">
                <h2>Benvenuti al Miss Caffè</h2>
                <p>Dove ogni momento diventa speciale con il nostro caffè d'eccellenza</p>
                <div style="font-size: 4rem; margin: 2rem 0;">☕✨</div>
            </section>

            <section id="menu" class="menu-section">
                <h2 class="section-title">Il Nostro Menu</h2>
                
                <div class="menu-tabs">
                    <div class="menu-tab active" data-menu="colazione">Colazione</div>
                    <div class="menu-tab" data-menu="aperitivo">Aperitivo</div>
                    <div class="menu-tab" data-menu="pranzo">Pranzo</div>
                    <div class="menu-tab" data-menu="cena">Cena</div>
                </div>

                <div id="colazione" class="menu-content active">
                    <div class="menu-items">
                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Espresso Italiano</h4>
                                <p>Il nostro blend esclusivo di caffè arabica tostato a regola d'arte</p>
                            </div>
                            <div class="item-price">€1,20</div>
                        </div>
                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Cappuccino Cremoso</h4>
                                <p>Espresso con schiuma di latte vellutata e cacao in polvere</p>
                            </div>
                            <div class="item-price">€1,80</div>
                        </div>
                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Cornetto Artigianale</h4>
                                <p>Sfoglia croccante con crema pasticcera o marmellata fatta in casa</p>
                            </div>
                            <div class="item-price">€2,00</div>
                        </div>
                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Yogurt con Granola</h4>
                                <p>Yogurt greco con granola croccante, miele e frutti di bosco</p>
                            </div>
                            <div class="item-price">€4,50</div>
                        </div>
                    </div>
                </div>

                <div id="aperitivo" class="menu-content">
                    <div class="menu-items">
                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Spritz Veneziano</h4>
                                <p>Aperol, prosecco, acqua frizzante e una fetta d'arancia</p>
                            </div>
                            <div class="item-price">€6,00</div>
                        </div>
                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Negroni Sbagliato</h4>
                                <p>Campari, vermouth rosso e prosecco con scorza d'arancia</p>
                            </div>
                            <div class="item-price">€7,00</div>
                        </div>
                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Tagliere Misto</h4>
                                <p>Selezione di formaggi locali, salumi e confetture</p>
                            </div>
                            <div class="item-price">€12,00</div>
                        </div>
                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Bruschette Assortite</h4>
                                <p>Pomodoro e basilico, olive taggiasche, ricotta e miele</p>
                            </div>
                            <div class="item-price">€8,00</div>
                        </div>
                    </div>
                </div>

                <div id="pranzo" class="menu-content">
                    <div class="menu-items">
                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Pasta del Giorno</h4>
                                <p>Pasta fresca preparata con ingredienti stagionali del territorio</p>
                            </div>
                            <div class="item-price">€12,00</div>
                        </div>
                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Insalata Miss Caffè</h4>
                                <p>Mix di lattughe, pomodorini, mozzarella di bufala, noci e dressing al balsamico</p>
                            </div>
                            <div class="item-price">€9,50</div>
                        </div>
                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Panino Gourmet</h4>
                                <p>Pane pugliese con prosciutto crudo, stracciatella, pomodori secchi e rucola</p>
                            </div>
                            <div class="item-price">€8,50</div>
                        </div>
                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Zuppa del Giorno</h4>
                                <p>Zuppa preparata fresca ogni giorno con verdure di stagione</p>
                            </div>
                            <div class="item-price">€7,00</div>
                        </div>
                    </div>
                </div>

                <div id="cena" class="menu-content">
                    <div class="menu-items">
                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Orecchiette alle Cime di Rapa</h4>
                                <p>Pasta tipica pugliese con cime di rapa, aglio, olio e peperoncino</p>
                            </div>
                            <div class="item-price">€14,00</div>
                        </div>
                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Branzino in Crosta di Sale</h4>
                                <p>Pesce fresco del giorno cotto in crosta di sale alle erbe</p>
                            </div>
                            <div class="item-price">€18,00</div>
                        </div>
                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Tagliata di Manzo</h4>
                                <p>Carne locale con rucola, grana e pomodorini</p>
                            </div>
                            <div class="item-price">€16,00</div>
                        </div>
                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Tiramisù della Casa</h4>
                                <p>Il nostro tiramisù preparato con caffè Miss Caffè e mascarpone fresco</p>
                            </div>
                            <div class="item-price">€6,00</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="allergeni">
                <h3>Legenda Allergeni</h3>
                <div class="allergeni-grid">
                    <div class="allergene">🌾 Glutine</div>
                    <div class="allergene">🥛 Latte</div>
                    <div class="allergene">🥚 Uova</div>
                    <div class="allergene">🥜 Frutta a Guscio</div>
                    <div class="allergene">🐟 Pesce</div>
                    <div class="allergene">🦐 Crostacei</div>
                    <div class="allergene">🌱 Soia</div>
                    <div class="allergene">🍃 Sedano</div>
                </div>
            </section>

            <section class="newsletter">
                <h3>Resta Aggiornato</h3>
                <p>Iscriviti alla nostra newsletter per ricevere news sui nostri eventi e offerte speciali</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="La tua email" required>
                    <button type="submit">Iscriviti</button>
                </form>
            </section>
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>Miss Caffè</h4>
                <p>Via Roma, 123</p>
                <p>70100 Bari (BA)</p>
                <p>Tel: 080 123 4567</p>
                <p>info@misscaffe.it</p>
            </div>
            <div class="footer-section">
                <h4>Orari di Apertura</h4>
                <p>Lunedì - Venerdì: 7:00 - 24:00</p>
                <p>Sabato: 7:00 - 01:00</p>
                <p>Domenica: 8:00 - 24:00</p>
            </div>
            <div class="footer-section">
                <h4>Seguici</h4>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">TikTok</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Miss Caffè. Tutti i diritti riservati.</p>
        </div>
    </footer>

    <script>
        // Menu dinamico
        const menuTabs = document.querySelectorAll('.menu-tab');
        const menuContents = document.querySelectorAll('.menu-content');

        menuTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const menuType = tab.getAttribute('data-menu');
                
                // Rimuovi classe active da tutti i tab e contenuti
                menuTabs.forEach(t => t.classList.remove('active'));
                menuContents.forEach(c => c.classList.remove('active'));
                
                // Aggiungi classe active al tab cliccato e al contenuto corrispondente
                tab.classList.add('active');
                document.getElementById(menuType).classList.add('active');
            });
        });

        // Navigation mobile
        const navToggle = document.querySelector('.nav-toggle');
        const navMenu = document.querySelector('nav ul');

        navToggle.addEventListener('click', () => {
            navMenu.classList.toggle('show');
        });

        // Smooth scroll per i link di navigazione
        document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
                navMenu.classList.remove('show');
            });
        });

        // Dropdown menu navigation
        document.querySelectorAll('.dropdown-content a[data-menu]').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const menuType = link.getAttribute('data-menu');
                
                // Scroll alla sezione menu
                document.getElementById('menu').scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Attiva il tab corrispondente
                setTimeout(() => {
                    menuTabs.forEach(t => t.classList.remove('active'));
                    menuContents.forEach(c => c.classList.remove('active'));
                    
                    const targetTab = document.querySelector(`[data-menu="${menuType}"].menu-tab`);
                    const targetContent = document.getElementById(menuType);
                    
                    if (targetTab && targetContent) {
                        targetTab.classList.add('active');
                        targetContent.classList.add('active');
                    }
                }, 500);
            });
        });

        // Newsletter form
        document.querySelector('.newsletter-form').addEventListener('submit', (e) => {
            e.preventDefault();
            const email = e.target.querySelector('input[type="email"]').value;
            alert('Grazie per esserti iscritto alla nostra newsletter!');
            e.target.reset();
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.98)';
                header.style.boxShadow = '0 2px 30px rgba(0,0,0,0.15)';
            } else {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
            }
        });
    </script>
</body>
</html>