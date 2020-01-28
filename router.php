<?

    class router {

        private $routes_unauthenticated;
        private $routes_authenticated;
        private $page;

        function __construct($page){
            $this->page = $page;
            $this->routes_unauthenticated = ["login","register","home","email_confirmation"];
            $this->routes_authenticated = [];
            $this->routes_authenticated["event/{name}/{desc}/{id}"] = "event";
            $this->routes_authenticated["home"] = "home";
            $this->routes_authenticated["create_event"] = "create_event";
            $this->routes_authenticated["event_preview"] = "event_preview";
            $this->routes_authenticated["event"] = "event";
            $this->routes_authenticated["event_dashboard"] = "event_dashboard";
        }

        public function route(){
            $matched_route = NULL;
            
            if(!in_array($this->page,$this->routes_unauthenticated) && !isset($_COOKIE["login_status"])){
                redirect("home");
            }

            foreach($this->routes_authenticated as $route => $destination){
                if(preg_match(convert_route_regx($route), $this->page, $matches)){
                    foreach($matches as $match){
                        if($match == $this->page){
                            $matched_route = $route;
                            break;
                        }
                    }
                }
            }

            // check if user is not authenticated and trying to reach authenticated page
            if($matched_route != NULL && $matched_route != "home" && !isset($_COOKIE["login_status"])){
                redirect("login");
            }

            // check if user is authenticated and trying to reach unkown page
            if($matched_route == NULL && isset($_COOKIE["login_status"])){
                redirect("home");
            }

            // check if user is authenticated and trying to reach authenticated page
            if($matched_route != NULL && isset($_COOKIE["login_status"])){
                return $this->routes_authenticated[$matched_route];
            }
        }

    }

?>