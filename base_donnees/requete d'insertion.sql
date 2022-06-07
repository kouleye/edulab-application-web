USE Commerce_ligne ; 

insert into profil values(1,"admin");
insert into profil values(2,"client");

insert into utilisateur(idutilisateur,login,motdepass,etat,idprofil) values(1,"martialUser",MD5("password"),1,1);
insert into personne(nom,prenom,tel,sexe,adresse,email,ville,region,pays, idutilisateur)
      values("Kouleye","Martial","+221774137905","M","Medina 27x18","martialkouleye@gmail.com","Dakar","Dakar","Senegal",1);

insert into utilisateur(idutilisateur,login,motdepass,etat,idprofil) values(2,"ClientUser",MD5("passwordclient"),1,2);
insert into personne(nom,prenom,tel,sexe,adresse,email,ville,region,pays, idutilisateur) 
       values("Mineta","Diouf","+221774207910","F","Ouakam camp millitaire","minetadiouf@gmail.com","Dakar","Dakar","Senegal",2);



insert into categorieproduit values("vestimentaire","Vetements patalon chemise..");
insert into categorieproduit values("Bracellet","montres, alliance ..");


insert into produit values("P1","Ensemble a sortie","ensemble vetement pour sortie",150,125000,250000,"vestimentaire","image/SORTA.jpg");
insert into produit values("P2","Montre zara","couplage montre et bracellet ",200,30000,50000,"Bracellet","image/braacellet_montre.jpg");
insert into produit values("P3","blouson hivers","vetement pour l'hiver",150,45000,70000,"vestimentaire","image/Hivers.jpg");
insert into produit values("P4","Alliance","couplage montre et bracellet ",200,50000,90000,"Bracellet","image/alliance.jpg");


insert into commande(datecommande, datelivraison,status,commentaire,idPers) values ('2022-06-15','2022-07-15',"En cours","Achat d'un ensemble a sortie",2) ;
insert into commande(datecommande, datelivraison,status,commentaire,idPers) values ('2022-06-11','2022-07-11',"En cours","Achat d'une montre",2) ;

insert into  detailscommande  values (1,"P1",1,250000,1);
insert into  detailscommande  values (2,"P2",1,50000,1);

insert into payement VALUES(2,1,'2022-06-11',300000);
