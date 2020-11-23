A simple crud to learn the flow in Laravel framework

Entities:
1. Task
2. Status
3. Priority

New things learnt:
1. Middleware - Request Interceptor
2. Request validations

How to configure:
1. Clone the repository
2. Run <pre> php artisan --install --seed</pre> to install the schema needed for application and seed some data
3. Run <pre> php artisan serve </pre> to start the application

Endpoints: 
1. Add tasks: 
   Method: POST<br>
   Request URL: http://127.0.0.1:8000/tasks <br>
   Request Payload: 
   <pre>
   {
    "name":"Task1",
    "statusId":"s3",
    "priorityId":"p3",
    "due_date":"2020-12-22"
   }
   </pre>
   Response: 
   <pre> 
   {
    "id" : 1,
    "name":"Task1",
    "statusId":"s3",
    "priorityId":"p3",
    "due_date":"2020-12-22"
   }
   </pre>
  
2. Get Task by Id:<br>
   Method: GET<br>
   Request URL:  http://127.0.0.1:8000/tasks/1 <br>
   Response:
   <pre>
   {
    "data": {
        "id": 1,
        "created_at": "2020-11-19T13:48:56.000000Z",
        "updated_at": "2020-11-21T16:17:39.000000Z",
        "due_date": "2020-12-01",
        "name": "updated Task",
        "priorityId": "p1",
        "statusId": "s1",
        "deleted": 0
    },
    "status": 200
   }
   </pre>
   
3. Fetch all tasks: 
   Method: GET
   Request URL:  http://127.0.0.1:8000/tasks/
   Response: All the tasks in the DB

4. Fetch tasks with basic filters: 
   Method: GET<br>
   Endpoint: http://127.0.0.1:8000/tasks?from=2020-11-01&to=2020-12-31&pageNumber=2&limit=5<br>
   Response: All the tasks retrieved for the filter provided<br>

5. Update a Task: <br>
   Method: PUT<br>
   Request payload: <br>
   <pre>
   {
       "id":1,
       "due_date":"2020-10-01",
       "name":"updated Task"
   }
   </pre>
   Response: Task with updated data

6. Group data with column with counts: 
   Method: POST
   Request Payload: 
   <pre>
   {
      "column": "due_date"
   }
   </pre>
   Response: 
   <pre>
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
   </pre>
   
   
   
   
