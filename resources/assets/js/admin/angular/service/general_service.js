var appAccelaar = window.appAccelaar || angular.module('appAccelaar',[]);
appAccelaar.service('General',['$http','$q','$resource',
  function($http,$q,$resource){
  this.getSkills = function(query){
    var defer = $q.defer();
    $http.get('/api/get_fields').then(function(result){
      defer.resolve(result);
    }, function(error){
      console.log(error);
      defer.reject('not available');
    });
    return defer.promise;
  };
  this.getSkillsById = function(id){
    var defer = $q.defer();
    $http({
      url:'/api/get-skills-by-id/?id='+id,
      method: 'GET'
    }).then(function(result){
      defer.resolve(result)
    }, function(error){
      defer.reject(error)
    });
    return defer.promise;
  };
  this.saveSkillById = function(id,data){
    return $q(function(resolve,reject){
      var url = "/api/admin/save_skills_by_id";
      $http.post(url,{id:id,data:data}).then(function(result){
        resolve(result)
      }, function(error){
        reject(error)
      })
    });
  };
  this.removeSkill = function(skill){
    return $q(function(resolve,reject){
      var url = "/api/admin/delete_skill_by_id";
      $http.post(url,skill).then(function(result){
        resolve(result)
      }, function(error){
        reject(error)
      })
    })
  };

  this.qualificationType = function(){
    return $resource('/api/admin/qualification-type/:id',{
      id:'@id'
    },{
      update:{method:'PUT'}
    })
  };

  this.college = function(){
    return $resource('/api/admin/college/:id',{id:'@id'},{
      update:{method:'PUT'}
    })
  };
  this.getStates = function(){
    var defer = $q.defer();
    $http.get(
      '/api/get-states'
    ).then(function(result){
      defer.resolve(result);
    }, function(error){
      console.log(error);
      defer.reject(error)
    });

    return defer.promise;
  };

}]);