A simple crud to learn the flow in Laravel framework

Entities:
Task

New things learnt:
1. Middleware - Request Interceptor
2. Request validations

How to configure:
1. Clone the repository
2. Run <pre> php artisan migrate </pre> to install the schema needed for application
3. Run <pre> php artisan serve </pre> to start the application

Endpoints: 
1. Add tasks: 
   Method: POST
   Request URL: http://127.0.0.1:8000/tasks 
   Request Payload: 
   {
    "name":"olddate",
    "statusId":"s3",
    "priorityId":"p3",
    "due_date":"2020-10-22"
   }
  Response: Task with id in json
  
2. Get Task by Id:
   Method: GET
   Request URL:  http://127.0.0.1:8000/tasks/1 
   Response: Task corresponding to the id provided
   
3. Fetch all tasks: 
   Method: GET
   Request URL:  http://127.0.0.1:8000/tasks/
   Response: All the tasks in the DB

4. Fetch tasks with basic filters: 
   Method: GET
   Endpoint: http://127.0.0.1:8000/tasks?from=2020-11-01&to=2020-12-31&pageNumber=2&limit=5
   Response: All the tasks retrieved for the filter provided

5. Update a Task: 
   Method: PUT
   Request payload: 
   {
       "id":1,
       "due_date":"2020-10-01",
       "name":"updated Task"
   }
   Response: Task with updated data

6. Group data with column with counts: 
   Method: POST
   Request Payload: 
   {
      "column": "due_date"
   }
   Response: 
   {
    "data": [
        {
            "due_date": "2020-11-24",
            "count": 4
        },
        {
            "due_date": "2020-12-01",
            "count": 1
        },
        {
            "due_date": "2020-12-22",
            "count": 1
        },
        {
            "due_date": "2020-12-29",
            "count": 1
        },
        {
            "due_date": "2020-12-30",
            "count": 1
        }
    ],
    "status": 200
   }
   
   
   
   
