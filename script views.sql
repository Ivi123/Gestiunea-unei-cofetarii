use cofetarie;
-- vizualizarea furnizorilor care au incheiat o factura in data de '2020-12-31' -- crere compusa
create or replace view view_facturile_furnizorilor_data as
select fa.cod_fiscal, fa.data, fu.denumire from furnizor fu join `factura fiscala` fa on (fa.cod_fiscal = fu.cod_fiscal)
where fa.data = '2020-12-31';

-- vizualizarea tuturor comenzilor ordonate crescator dupa data -- cerere compusa
create or replace view view_cantitate_comanda as
select c.data, d.cantitate, c.id_comanda from comanda c join `descriere comanda` d on (c.id_comanda = d.id_comanda) 
ORDER BY c.data ASC;

-- vizualizarea pretului minim, maxim si cheltuielile totale -- cerere complexa
create or replace view view_cheltuieli_totale as
select MIN(pret) as 'Pretul Minim', MAX(pret) as 'Pretul Maxim', SUM(pret) as 'Cheltuieli Totale'
from `detaliu factura`;