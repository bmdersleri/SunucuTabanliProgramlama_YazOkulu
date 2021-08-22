--INNER JOIN ORNEGI
SELECT kitap.kitap_ad,tur.tur_ad
FROM kitap
INNER JOIN tur on kitap.turno=tur.turno

--LEFT JOIN ORNEGI
SELECT kitap.kitap_ad, yazar.yazar_ad
FROM kitap
LEFT JOIN yazar ON yazar.yazarno = kitap.yazarno

--RIGHT JOIN ORNEGI
SELECT kitap.kitap_ad, yazar.yazar_ad
FROM kitap
RIGHT JOIN yazar ON yazar.yazarno = kitap.yazarno

--FULL OUTER JOIN ORNEGI
SELECT kitap.kitap_ad, yazar.yazar_ad 
FROM kitap FULL OUTER JOIN yazar ON kitap.yazarno=yazar.yazarno

--CROSS JOIN ORNEGI
SELECT yazar.yazar_ad,tur.tur_ad
FROM yazar
CROSS JOIN tur

--UNION ORNEGI
SELECT musteri as Firma FROM satis
UNION
SELECT tedarikci as Firma FROM alis 

--UNION ALL ORNEGI
SELECT musteri as Firma FROM satis
UNION ALL
SELECT tedarikci as Firma FROM alis 

--INTERSECT ORNEGI
SELECT musteri as Firma FROM satis
INTERSECT
SELECT tedarikci as Firma FROM alis 

--INTERSECT ALL ORNEGI
SELECT musteri as Firma FROM satis
INTERSECT ALL
SELECT tedarikci as Firma FROM alis 

--EXCEPT ORNEGI
SELECT musteri as Firma FROM satis
EXCEPT
SELECT tedarikci as Firma FROM alis

--EXCEPT ALL ORNEGI
SELECT musteri as Firma FROM satis
EXCEPT ALL
SELECT tedarikci as Firma FROM alis 