<details>
  <summary>Disclaimer</summary>
  
  Klein probleem in de code design waardoor ik uiteindelijk random docenten heb toegewezen per schoolreisje:
  ```php
    public static function findAvailableTeacher() {
        // choose random teacher
        return self::$teachers[array_rand(self::$teachers, 1)];
    }
  ```
  
  ```javascript
  console.log("I'm a code block!");
  ```
  
</details>
![image](https://github.com/deadcandle/Schooluitje/assets/59292383/7d917a3a-e448-4765-b532-e62a9931f43f)
