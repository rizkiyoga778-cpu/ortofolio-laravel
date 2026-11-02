const root = document.documentElement;
const $ = (id) => document.getElementById(id);

// 1. Mode gelap/terang
$('theme').onclick = () => {
  const dark = root.classList.toggle('dark');
  localStorage.theme = dark ? 'dark' : 'light';
};

// 2. Menu hamburger (hanya terlihat di HP)
const menu = $('menu');
const burger = $('burger');
function setMenu(open) {
  menu.classList.toggle('hidden', !open);
  menu.classList.toggle('flex', open);
  burger.setAttribute('aria-expanded', open);
}
burger.onclick = () => setMenu(menu.classList.contains('hidden'));
menu.querySelectorAll('a').forEach((a) => (a.onclick = () => setMenu(false)));

// 3. Efek mengetik (daftar peran datang dari config lewat data-roles)
const typed = $('typed');
const roles = JSON.parse(typed.dataset.roles);
let r = 0, c = 0, deleting = false;
function type() {
  const word = roles[r];
  c += deleting ? -1 : 1;
  typed.textContent = word.slice(0, c);
  let delay = deleting ? 45 : 90;
  if (!deleting && c === word.length) { deleting = true; delay = 1400; }
  else if (deleting && c === 0) { deleting = false; r = (r + 1) % roles.length; delay = 300; }
  setTimeout(type, delay);
}
type();

// 4. Filter proyek
const buttons = document.querySelectorAll('[data-f]');
buttons.forEach((b) => {
  b.onclick = () => {
    buttons.forEach((x) => x.setAttribute('aria-pressed', x === b));
    document.querySelectorAll('[data-c]').forEach((card) => {
      card.classList.toggle('hidden', b.dataset.f !== 'all' && card.dataset.c !== b.dataset.f);
    });
  };
});
