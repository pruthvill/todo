<!DOCTYPE html>
<html>
<head>
  <title>To-Do List</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f2f2f2;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    form {
      display: flex;
      margin-bottom: 20px;
    }

    input[type="text"] {
      flex: 1;
      padding: 10px;
      font-size: 16px;
    }

    select {
      padding: 10px;
      font-size: 16px;
      margin-left: 10px;
    }

    button {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      margin-bottom: 10px;
      padding: 10px;
      border-radius: 5px;
      background-color: #fff;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }

    .task-info {
      flex: 1;
    }

    .task-date {
      font-size: 14px;
      color: #777;
    }

    .task-priority {
      padding: 5px 10px;
      font-size: 12px;
      font-weight: bold;
      border-radius: 3px;
    }

    .high-priority {
      background-color: #FF7070;
      color: white;
    }

    .medium-priority {
      background-color: #FFB770;
      color: white;
    }

    .low-priority {
      background-color: #70B3FF;
      color: white;
    }

    .task-actions {
      display: flex;
    }

    .edit-button, .delete-button {
      padding: 5px 10px;
      font-size: 12px;
      color: white;
      border: none;
      cursor: pointer;
      margin-left: 5px;
    }

    .edit-button {
      background-color: #4B8BF4;
    }

    .delete-button {
      background-color: #FF7070;
    }
  </style>
</head>
<!-- <body>
  <h1>To-Do List</h1>
  
  <form>
    <input type="text" id="taskInput" placeholder="Enter a new task">
    <select id="prioritySelect">
      <option value="high">High Priority</option>
      <option value="medium">Medium Priority</option>
      <option value="low">Low Priority</option>
    </select>
    <button type="button" onclick="addTask()">Add Task</button>
  </form>
  
  <ul id="taskList">
    <!-- Existing tasks will be dynamically added here -->
  </ul>
  
  <!DOCTYPE html>
<html>
<head>
  <title>To-Do List</title>
  <style>
    /* Your CSS styles here */
  </style>
</head>
<body> 
  <h1>To-Do List</h1>
  
  <form>
    <input type="text" id="taskInput" placeholder="Enter a new task">
    <select id="prioritySelect">
      <option value="high">High Priority</option>
      <option value="medium">Medium Priority</option>
      <option value="low">Low Priority</option>
    </select>
    <button type="button" onclick="addTask()">Add Task</button>
  </form>
  
  <ul id="taskList">
    <!-- Existing tasks will be dynamically added here -->
  </ul>
  
  <script>
    var tasks = [];

    function addTask() {
      var taskInput = document.getElementById("taskInput");
      var prioritySelect = document.getElementById("prioritySelect");
      
      var task = taskInput.value;
      var priority = prioritySelect.value;
      var date = new Date().toLocaleString();
      
      if (task.trim() === "") {
        alert("Please enter a task.");
        return;
      }
      
      var newTask = {
        task: task,
        priority: priority,
        date: date
      };
      
      tasks.push(newTask);
      
      renderTasks();
      
      taskInput.value = "";
      prioritySelect.selectedIndex = 0;
    }
    
    function renderTasks() {
      var taskList = document.getElementById("taskList");
      taskList.innerHTML = "";
      
      tasks.forEach(function(task, index) {
        var listItem = document.createElement("li");
        listItem.innerHTML = `
          <div class="task-info">
            <span class="task-date">[${task.date}]</span> ${task.task}
          </div>
          <span class="task-priority ${task.priority}-priority">${task.priority}</span>
          <div class="task-actions">
            <button class="edit-button" onclick="editTask(${index})">Edit</button>
            <button class="delete-button" onclick="deleteTask(${index})">Delete</button>
          </div>
        `;
        
        taskList.appendChild(listItem);
      });
    }
    
    function editTask(index) {
      var taskInput = document.getElementById("taskInput");
      var prioritySelect = document.getElementById("prioritySelect");
      
      var task = tasks[index];
      taskInput.value = task.task;
      prioritySelect.value = task.priority;
      
      tasks.splice(index, 1);
      renderTasks();
    }
    
    function deleteTask(index) {
      tasks.splice(index, 1);
      renderTasks();
    }
  </script>
</body>
</html>


</body>
</html>
