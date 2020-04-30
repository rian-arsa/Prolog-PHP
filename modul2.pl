findLast(X, [X]).
findLast((X), [_|H]) :- findLast(X,H). 

hasil:- findLast((X), [_|H]),
    findLast(Y),
    write(Y).

findLast(5).
findLast(6).
findLast(4).
findLast(X, [1,2,3,4,5]).
findLast(X, [1,2,3,4,5]).
findLast(X, [1,2,3,4,5]).
findLast(X, [1,2,3,4,5]).
findLast(X, [1,2,3,4,5]).
findLast(X, 1,2,3,4,5).
findLast(X, 1,2,3,4,5).
findLast(X, 1,2,3,4,5).
