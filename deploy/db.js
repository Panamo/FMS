use fms
db.createUser({user: "fms", pwd: "1234", roles: [{role: "userAdmin", db: "fms"}]});
