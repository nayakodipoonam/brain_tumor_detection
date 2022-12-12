package com.springbootdb.springbootdb.services;
import com.springbootdb.springbootdb.dao.BiodataDao;
import com.springbootdb.springbootdb.entities.Biodata;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import java.util.*;

@Service
public class BiodataSerImpl implements BiodataService{
     // List<Biodata> list;
    @Autowired
    private BiodataDao biodataDao;

    public BiodataSerImpl()
    {
 /*
               list = new ArrayList<>();
              list.add(new Biodata(1,"Mohit","Bahadure",22));
               list.add(new Biodata(2,"Arpit","Bahadure",20));
   */
    }

    @Override
    public List<Biodata> getbiodata() {
        return biodataDao.findAll();
    }

    @Override
    public Biodata getbiodatabyId(long id) {
        // TODO Auto-generated method stub
        Biodata Biodata = null;

  //     for (Biodata data : list) {
   //         if (data.getId() == id) {
  //              Biodata = data;
   //         }
    //    }
        return biodataDao.getById(id);
    }

    @Override
    public Biodata addbiodata(Biodata biodata) {
        //list.add(Biodata);
        biodataDao.save(biodata);
        return biodata;
    }
}
