kali(X,1,X):-!.
kali(X,Y,Z):-K is Y-1, kali(X,K,Z1), Z is X+Z1.

program:-nl,
    pertama(X),
    kedua(Y),
    R is (X*Y),
    write(R).

pertama(12).
kedua(2).
