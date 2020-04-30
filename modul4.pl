and(A,B):- A=1,B=1.

and(0,2,1).
and(1,1,1).
and(1,2,2).
and(0,1,2).

program:-nl,
    pertama(X),
    kedua(Y),
    and(Z,X,Y),

    write(Z).


pertama(1).
kedua(2).
