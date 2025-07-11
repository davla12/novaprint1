document.addEventListener('DOMContentLoaded',()=>{
 const field=document.getElementById('star-field');
 if(!field) return;
 const N=120;
 for(let i=0;i<N;i++){
  const s=document.createElement('div');
  s.className='star';
  s.style.left=Math.random()*100+'%';
  s.style.top=Math.random()*100+'%';
  const size=Math.random()*2+1;
  s.style.width=size+'px';
  s.style.height=size+'px';
  s.style.animationDuration=(Math.random()*3+2)+'s';
  s.style.animationDelay=(Math.random()*5)+'s';
  field.appendChild(s);
 }
});
function updateLink() {
    const xizmat = select.value;
    const telefon = phoneInput.value.trim();

    if (xizmat && telefon) {
        const message = encodeURIComponent(
            "Assalomu alaykum! Menga kerak: " + xizmat + "\nTelefon raqamim: " + telefon
        );
        // To‘g‘ridan-to‘g‘ri @Novaa_print bot yoki user'ga yuborish uchun
        link.href = "https://t.me/Novaa_print?text=" + message;
        link.classList.remove("disabled");
    } else {
        link.href = "#";
        link.classList.add("disabled");
    }
}
const modals = [
  // ... mavjud modallar ...

  { id: 'modal-logo', title: 'Logo dizayn', rows: [
    ['Basic','200 000 so‘m','Logo basic'],
    ['Standard','350 000 so‘m','Logo standard'],
    ['Premium','600 000 so‘m','Logo premium'],
    ['Dizayn soati','200 000 so‘m','Logo premium']
  ]},

  // ✅ YANGI: 3D bukvalar
  { id: 'modal-letter', title: 'Obyomli bukvalar', rows: [
    ['50×50 sm','100 000 so‘m','3D harf 50x50'],
    ['70×70 sm','150 000 so‘m','3D harf 70x70'],
    ['LED yoritilgan','300 000 so‘m','3D LED harf'],
    ['Oddiy plastmassa','80 000 so‘m','3D oddiy harf']
  ]}
];
