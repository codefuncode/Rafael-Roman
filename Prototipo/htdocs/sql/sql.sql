ALTER TABLE Articulo
ADD FOREIGN KEY (ID_Armario) REFERENCES Armario (ID_Armario); 

ALTER TABLE Articulo
ADD FOREIGN KEY (ID_Cubiculo) REFERENCES Cubuiculo I(D_Cubuiculo); 

ALTER TABLE Articulo
ADD FOREIGN KEY (ID_Pasillo) REFERENCES Pasillo (ID_pasillo); 

ALTER TABLE Articulo
ADD FOREIGN KEY (ID_Tablilla) REFERENCES Tablilla (ID_tablilla); 