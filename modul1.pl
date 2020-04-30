wanita(nina).
wanita(tasya).
wanita(elok).

teman(bray, nina).
teman(rendi, elok).
teman(zaka, tasya).
teman(rian, reemar).

cari_temen:-
    pria(X),
    teman(X,Y),
    write(Y).



pria(rian).
