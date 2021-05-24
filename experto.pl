% padre
  padre('Homero', 'Bart').
  padre('Homero', 'Lisa').
  padre('Homero', 'Maggie').
  padre('Abraham','Homero').
  padre('Flanders', 'Rod').
  padre('Flanders', 'Todd').
   findall( X, padre(X,Y), Resultado),write(Resultado).

%madre  
madre('Marge', 'Bart').
madre('Marge', 'Lisa').
madre('Jaqueline','Marge').
madre('Selma','Ling').

%abuelo
abuelo('Abraham','Bart').
abuelo('Abraham','Lisa').
abuelo('Abraham','Maggie').

%tia
tia1('Patty','Bart').
tia2('Selma','Bart').
tia1('Patty','Lisa').
tia2('Selma','Lisa').
tia1('Patty','Maggie').
tia2('Selma','Maggie').

%Abuela Paterna
abuelap('Mona','Bart').
abuelap('Mona','Lisa').
abuelap('Mona','Maggie').

%Abuela Materna
abuelam('Jackeline','Bart').
abuelam('Jackeline','Lisa').
abuelam('Jackeline','Maggie').

