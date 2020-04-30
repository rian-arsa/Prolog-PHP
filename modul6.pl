
 mulai:-
      init,
      data_pengamatan,
      aturan(_,Alasan),
      jawaban(Alasan,Jawab,_),
      write(Jawab),nl,
      retractall(observation(_)).
 mulai:-
      write('Merekomendasika ROG Phone dengan harga Rp 37.000.000'),nl,nl,
      retractall(observation(_)).
 init:-
      write('Cell Maju agak Mundur'),nl,nl,
      write('PROGRAM SISTEM REKOMENDASI HP'),nl,
      judul(Judul),write(Judul),nl,nl,
      tulis_pesan,nl.
 tulis_pesan:-
      pesan(Pesan),
   write(Pesan),nl,fail.
 tulis_pesan:-
      nl.
 data_pengamatan:-
   pertanyaan(Tanya,Obs),
   write(Tanya),nl,
   read(Yatidak),
   Yatidak=y,
   assert(observation(Obs)),
   fail.
 data_pengamatan.
 judul('Menganalisa kebutuhan customer : ').
 pesan('Jawab pertanyaan berikut dengan y atau t').
 pertanyaan('Apakah anda membeli HP karena Penampilan nya?', penampilan).
 pertanyaan('Apakah anda membeli HP karena Kamera nya?', kamera).
 pertanyaan('Apakah anda membeli HP karena RAM nya?', ram).
 pertanyaan('Apakah anda membeli HP karena Memori nya?', memori).
 pertanyaan('Apakah anda membeli HP karena Lebar layar nya?', lebar).
 aturan(1, oppo_f1):-
      observation(penampilan),
      observation(kamera),
      not(observation(ram)),
      observation(memori),
      not(observation(lebar)).
 aturan(2, vivo_z1):-
      not(observation(penampilan)),
      observation(kamera),
      observation(ram),
      observation(memori),
      not(observation(lebar)).
 aturan(3, samsung_s50):-
      observation(penampilan),
      observation(kamera),
      observation(ram),
      not(observation(memori)),
      not(observation(lebar)).
 aturan(4, xiaomi_10):-
      not(observation(penampilan)),
      observation(kamera),
      observation(ram),
      not(observation(memori)),
      not(observation(lebar)).
 aturan(5, iphone_11):-
      observation(penampilan),
      observation(kamera),
      observation(ram),
      observation(memori),
      observation(lebar).
 aturan(6, nokia_x110):-
      not(observation(penampilan)),
      not(observation(kamera)),
      not(observation(ram)),
      observation(memori),
      not(observation(lebar)).
 jawaban(oppo_f1, 'Merekomendasikan HP OPPO F1 dengan harga Rp 2.000.000', 2000000).
 jawaban(vivo_z1, 'Merekomendasikan HP VIVO Z1 dengan harga Rp 3.100.000', 3100000).
 jawaban(samsung_s50, 'Merekomendasikan Samsung S50 dengan harga Rp. 2.500.000', 2500000).
 jawaban(xiaomi_10, 'Merekomendasikan Xiaomi 10 dengan harga Rp. 1.200.000', 1200000).
 jawaban(iphone_11, 'Merekomendasikan Iphone 11 dengan harga Rp. 12.000.000', 12000000).
 jawaban(nokia_x110, 'Merekomendasikan Nokia X110 dengan harga Rp. 200.000',20000).


aturan(1,1,1,1,1,1).
aturan(2,2,1,1,1,1).
aturan(3,2,2,1,1,1).
aturan(4,2,2,1,2,1).
aturan(5,2,2,1,1,2).

 jawaban(1, ' OPPO F1 dengan harga Rp 2.000.000').
 jawaban(2, ' VIVO Z1 dengan harga Rp 3.100.000').
 jawaban(3, ' Samsung S50 dengan harga Rp. 2.500.000').
 jawaban(4, ' Xiaomi 10 dengan harga Rp. 1.200.000').
 jawaban(5, ' Iphone 11 dengan harga Rp. 12.000.000').


program:-nl,
    pertama(X),
    kedua(Y),
    ketiga(Z),
    keempat(K),
    kelima(L),
    
    aturan(R,X,Y,Z,K,L),
    jawaban(R,A),
    write(A).

programm:-nl,
    pertama(X),
    kedua(Y),
    ketiga(Z),
    keempat(K),
    kelima(L),
    
    aturan(R,X,Y,Z,K,L),
    jawaban(R,A),
    write(R).
pertama(1).
kedua(1).
ketiga(1).
keempat(1).
kelima(1).
