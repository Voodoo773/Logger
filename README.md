# Logger, need add to .json
{
  "require" : {
    "voodoo773/logger" : "0.0.1"
  },
  "repositories":[
        {
            "type":"package",
            "package":{
                "name":"voodoo773/logger",
                "version":"0.0.1",
                "source":{
                    "type":"git",
                    "url":"https://github.com/Voodoo773/Logger.git",
                    "reference":"master"
                },
                "autoload":{
                    "classmap":["Logger.php"]
                }
            }
        }
  ],
}
