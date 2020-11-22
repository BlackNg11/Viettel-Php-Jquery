package com.tqphuc.service.impl;

import java.util.List;

import javax.inject.Inject;

import com.tqphuc.dao.ISimDAO;
import com.tqphuc.model.SimModel;
import com.tqphuc.service.ISimService;

public class SimService implements ISimService {

	/*
	 * private ISimDAO simDao;
	 * 
	 * public SimService() { simDao = new SimDAO(); }
	 */
	@Inject
	private ISimDAO simDao;

	@Override
	public List<SimModel> findAll() {
		return simDao.findAll();
	}

	@Override
	public SimModel save(SimModel simModel) {
		Long simId = simDao.save(simModel);
		return simDao.findOne(simId);
	}
}
