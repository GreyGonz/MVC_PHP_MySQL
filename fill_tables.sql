INSERT INTO llibres VALUES 
(1, '8491641785', 'Memoria del comunismo', '2018', 'La Esfera', 'Madrid', 'https://images-na.ssl-images-amazon.com/images/I/51JJKC6DcGL._SL500_SR109,160_.jpg', 'Cien años y cien millones de muertos después, ¿por qué el comunismo sigue siendo una ideología respetada? Buceando en las fuentes originales -de Marx, Bakunin y Lenin al Che o Pablo Iglesias- este libro explica la naturaleza real del comunismo'),
(2, '8403518455', 'Eternamente...', '2018', 'AGUILAR', 'Madrid', 'https://images-na.ssl-images-amazon.com/images/I/41b93sle5vL._SX335_BO1,204,203,200_.jpg', 'Mi intención no es cambiar el mundo, es que me dejes construir una pequeña parte del tuyo cuando entres por las puertas de mi vida. Yo te regalo el lápiz y una hoja en blanco para que hagas lo mismo con el mío.'), 
(3, '8401020417', 'Bellas durmientes', '2018', 'PLAZA & JANES', 'Londres', 'https://images-eu.ssl-images-amazon.com/images/I/61rfqEMDT0L._AC_US218_.jpg', 'En esta espectacular colaboración entre padre e hijo, Stephen King y Owen King nos ofrecen la historia más arriesgada de cuantas han contado hasta ahora: ¿qué pasaría si las mujeres abandonaran este mundo?');

INSERT INTO autors VALUES
(1, 'Federico Jiménez Losantos', 'Espanya', 'Espanya	Desde septiembre de 2009, es director y presentador del programa radiofónico Es la mañana de Federico, de la cadena esRadio (también se emite en Intereconomía Televisión), y columnista del diario El Mundo.', 'http://www.bolsia.com/users/attachments/off-topic/3520d1385993755t-federico-jimenez-losantos-%BFh%E9ore-o-villano-fede.jpg'),
(2, 'Pablo Pérez Rueda', 'Alemanya', 'Barcelona, 24 años. La de Alicante será su tercera final nacional consecutiva. Si en 2013 consiguió el 4º puesto, este amante de la improvisación buscará en el puerto alicantino, la recompensa a su constancia.', 'https://i.imgur.com/u7WcnGB.png'),
(3, 'Stephen King', 'Anglesa', 'Stephen Edwin King (Portland, 21 de setembre de 1947) és un escriptor estatunidenc en anglès, conegut per les seves novel·les de terror, supranatural, suspens, ciència-ficció i fantasia. Els seus llibres solen estar a la llista de best-sellers.', 'https://static.independent.co.uk/s3fs-public/styles/article_small/public/thumbnails/image/2013/12/09/17/stephen-king.jpg');

INSERT INTO autors_llibres VALUES
(1, 1, 2),
(2, 2, 1),
(3, 3, 3);

