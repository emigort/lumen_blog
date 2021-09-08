Endpoints:

to create the user 
    post /api/v1/marketing_user/1

    {
    "email": "emilio@test.com",
    "opt_in": 1,
    "first_name": "emilio",
    "last_name": "gort"
    }

to remove the user from the list

    delete api/v1/marketing_user/1


sql statement to create the table

    /database/migrations/sql/marketing_user.sql

